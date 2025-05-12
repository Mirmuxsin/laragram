<?php

namespace Milly\Laragram\FSM;

use App\Http\Controllers\Bot\TestController;
use Closure;
use Exception;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Arr;
use Milly\Laragram\Laragram;
use Milly\Laragram\Types\Update;
use ReflectionFunction;
use ReflectionMethod;
use Throwable;
use UnexpectedValueException;


/**
 * FSM-Router
 *
 * @example Routing: FSM::route('home', UserClass::start() );
 * @example Update status: FSM::update('checkBalance', $user_id);
 * @example Get status: FSM::status($user_id);
 */
class FSM
{
    protected static ?string $status = null;

    private static ?string $callable_type = null;

    /**
     * Handle update from telegram
     *
     * @param string $status
     * @param object|callable $class
     * @return bool|mixed
     * @throws Throwable
     */
    public static function route(string|null $status, callable|string|array $callable): mixed
    {
//        throw_if(!is_callable($callable), json_encode($callable) . " is not callable");
        $userStatus = static::status();
        if (!(bool)preg_match('#' . $status . '#', $userStatus)) {
            //user status is not equal
            return false;
        }

        if (is_array($callable) and class_exists($callable[0])) {

            self::$callable_type = 'class and method';

            $closure = new $callable[0]();
            $r = new ReflectionMethod($closure, $callable[1]);
            $function = $callable[1];

            $callable = [new $callable[0](), $callable[1]];
        } else {
            $closure = $callable(...);
            $r = new ReflectionFunction($closure);
            $function = $closure;
        }

        $parameters = $r->getParameters();
        $params = [];

        if ($count = count($parameters)) {
            $update = new Update();
            $properties = (new \ReflectionClass($update))->getProperties();

            if ($count > 1) {
                foreach ($properties as $property) {
                    foreach ($parameters as $parameter) {
                        if ($parameter->getName() == 'update'){
                            $params[$parameter->getName()] = $update;
                            continue;
                        }
                        if ($property->getType()->getName() == $parameter->getType()->getName())
                            $params[$parameter->getType()->getName()] = $update->{strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $parameter->getName()))};
                    }
                }
            } elseif ($single_prop_name = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $parameters[0]->getName())) and $update->{$single_prop_name}) {
                $params = [$update->{$single_prop_name}];
            } else {

                if (self::$callable_type == 'class and method') {
                    $handeWrongInput = (new $callable[0])->handeWrongInput ?? false;
                    if ($handeWrongInput) {
                        return (new $callable[0])->handleWrongInput($update);
                    }
                }
                // wrong type hinting for wrop type of update
                return false;
            }

            // todo throw beautiful exception if called is not found in update
            if (count($params) != count($parameters)) {
                throw new UnexpectedValueException('Cannot call the method from update: '.json_encode($parameters));
            }
        }

//        $method = new \ReflectionFunction($function);

        return response(call_user_func_array($callable, $params))->send();
    }


    /**
     * Get user status
     * @param int|null $user_id
     * @return string
     * @throws Exception
     */
    public static function status(int $user_id = null): string
    {

        //TODO status ni faqat birinchi route bazadan oladigan, boshqa routelar osha bilan check qiladigan qilish
        if (!self::$status) {
            $user_id = self::getUserId();
            $fsm = \Milly\Laragram\app\Models\FSM::find($user_id);

            if (!$fsm) {
                $fsm = new \Milly\Laragram\app\Models\FSM();
                $fsm['telegram_id'] = $user_id;
                $fsm['status'] = '/';
                $fsm->save();
                self::$status = '/';
            } else {
                self::$status = $fsm['status'];
            }
        }
        return self::$status;
    }

    public static function update(string $status, int $user_id = null)
    {
        if (!$user_id) $user_id = self::getUserId();
        $fsm = \Milly\Laragram\app\Models\FSM::find($user_id);
        $fsm['status'] = $status;
        if ($fsm->save()) {
            self::$status = $status;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int|null $user_id
     * @return int
     */
    public static function getUserId(?int $user_id = null): int
    {
        if (!$user_id) {
            if (isset((new Update())->message->from->id)) $user_id = (new Update())->message->from->id;
            else if (isset((new Update())->callback_query->from->id)) $user_id = (new Update())->callback_query->from->id;
            else if (isset((new Update())->chat_join_request->from->id)) $user_id = (new Update())->chat_join_request->from->id;
            else die("can't reach user_id!");
        }
        return $user_id;
    }
}
