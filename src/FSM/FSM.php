<?php

namespace Milly\Laragram\FSM;

use App\Http\Controllers\Bot\TestController;
use Exception;
use Milly\Laragram\Laragram;
use Milly\Laragram\Types\Update;
use Throwable;


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

    /**
     * Handle update from telegram
     *
     * @throws Throwable
     * @var array $class Function to call from array
     * @var array $types Types which allowed in to this function
     * @var string $status Status of chat
     */
    public static function route(string $status, callable $class, array $types)
    {
        throw_if(!is_callable($class), json_encode($class) . " is not callable");
        foreach ($types as $type) {
            if (!isset($type)) {
                //when type is not found in this update
                return true;
            }
        }
        $userStatus = static::status();
        if (!(bool)preg_match('#' . $status . '#', $userStatus)) {
            //user status is not equal
            return false;
        }

        return call_user_func_array($class, $types);
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
                $fsm['status'] = '';
                $fsm->save();
                self::$status = '';
            } else {
                self::$status = $fsm['status'];
            }
        }
        return self::$status;
    }

    public static function update(string $status, int $user_id = null)
    {
        $user_id = self::getUserId();
        $fsm = \Milly\Laragram\app\Models\FSM::find($user_id);
        $fsm['status'] = $status;
        $fsm->save();
        return true;
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
            else die('cant reach user_id!');
        }
        return $user_id;
    }
}
