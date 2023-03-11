<?php

namespace Milly\Laragram\app\Console\Commands;

use Illuminate\Console\Command;

/**
 * @no-named-arguments
 */
class laragram extends Command
{
    /**
     * @param int|string sada
     */

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laragram:update-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update to latest bot api and regenerate classes and methods';

    /**
     * Execute the console command.
     *
     * @return int
     */

    protected string $botApiJsonUrl = "https://ark0f.github.io/tg-bot-api/custom.json";

    public function handle()
    {
        $this->info('Getting json file...');
        $jsonFile = file_get_contents($this->botApiJsonUrl);
        $json = json_decode($jsonFile, true);

        $this->output->section("\nThanks to OpenAPI (https://ark0f.github.io/tg-bot-api)\nBot API version: ".$json['version']['major']);

        $this->info("\nUpdating methods: ");
        $bar = $this->output->createProgressBar(count($json['methods']));
        $bar->start();
        $this->putMethod($json['methods'], $bar);


        $bar->finish();

        $this->info("\nUpdating types...");
        $bar = $this->output->createProgressBar(count($json['objects']));
        $bar->start();
        foreach ($json['objects'] as $method) {
            $this->putObject($method);
            $bar->advance();
        }
        $bar->finish();
        return 0;
    }

    private function putMethod ($methods, $bar) {
        $arguments = "";
        foreach ($methods as $method){
            $comment = "";
            $function = "    public static function " . $method['name'] . " (";
            if (isset($method['arguments'])) {
                $arguments .= "     /**\n     * ";
                foreach ($method['arguments'] as $argument) {
                    $arguments .= "@var ";

                    if ( $argument['type'] == 'any_of') {
                        foreach ($argument['any_of'] as $key => $type) {

                            if ($type['type'] == 'reference'){
                                $type['type'] = "\Milly\Laragram\Types\\".$type['reference'];
                            } elseif ($type['type'] == 'integer') {
                                $type['type'] = 'int';
                            }
                            if ($key != count($argument['any_of'])-1 ) {
                                $arguments .= $type['type'].'|';

                                $function .= $type['type'].'|';
                            } else {
                                $arguments .= $type['type'].' ';
                                $function .= $type['type'].' ';
                            }
                        }
                        $argument['type'] = null;
                    } elseif ($argument['type']== 'reference'){
                        $argument['type'] = "\Milly\Laragram\Types\\".$argument['reference'];
                    }
                    $arguments .= $argument['type']." ".$argument['name']." ".
                        ($argument['required'] ? '*(required: true)*':'').
                        (array_key_exists('min_len', $argument) ? '*(min length: '.$argument['min_len'].')*':null).
                        (array_key_exists('max_len', $argument) ? '*(max length: '.$argument['min_len'].')*':null).
                        (array_key_exists('default', $argument) ? '*(default: '.$argument['default'].')*':null)
                        ." ".$argument['description']."\n     * ";
                    $function .= "$".$argument['name'].", ";
                }
            }
            $function .= ") {
        return Laragram::request('".$method['name']."', func_get_args());
    }\n\n";
            if (isset($method['arguments'])){
                $arguments .= "*/\n";
            }
            $arguments .= "\n$function";
            $bar->advance();
        }

        $text = "<?php

namespace Milly\Laragram\Methods;



/**
 * Telegram methods
 *
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either URL query string or application/json or application/x-www-form-urlencoded or multipart/form-data for passing parameters in Bot API requests.
On successful call, a JSON-object containing the result will be returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api#available-methods
 */
class Methods
{
$arguments
}";
        file_put_contents(__DIR__ . "/../../../Methods/Methods.php", $text);
    }

    private function putObject ($method) {
        $functions = "";
        $comments = "";

        if ($method['name'] == 'Update') {
            $functions .= "    public function __construct()
    {
        \$data = handler::get();
";
        } else {
            $functions .= "    public function __construct(\$data)
    {
";
        }
        if (isset($method['properties'])) {
            foreach ($method['properties'] as $argument) {

                if ($argument['type'] == 'integer'){
                    $argument['type'] = 'int';
                } elseif($argument['type'] == "reference"){
                    $argument['type'] = $argument['reference'];
                }

                $comments .= "    /**
    * ".$argument['description']."
    * @var ".$argument['type'].($argument['required']? null:"|null")."
    */
    public ".($argument['required']? null:"?").$argument['type']." $".$argument['name'].($argument['required']? null:" = null").";\n\n";


                if (!$argument['required']){
                    $functions .= "        if (isset(\$data['".$argument['name']."'])){\n";

                    if (isset($argument['reference'])){
                        $functions .= '            $this->'.$argument['name'].' = new '.$argument['type'].'($data[\''.$argument['name']."']);\n        }\n\n";
                    } else {
                        $functions .= '            $this->'.$argument['name'].' = $data[\''.$argument['name']."'];\n        }\n\n";
                    }
                } else {
                    if (isset($argument['reference'])){
                        $functions .= '        $this->'.$argument['name'].' = new '.$argument['type'].'($data[\''.$argument['name']."']);\n\n";
                    } else {
                        $functions .= '        $this->'.$argument['name'].' = $data[\''.$argument['name']."'];\n";
                    }
                }
            }

            $functions .= "    }";


            $text = "<?php

namespace Milly\Laragram\Types;


/**
* ".$method['name']."
 *
 *".$method['description']."
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url ".$method['documentation_link']."
 */
class ".$method['name']."
{
$comments

$functions
}";
            file_put_contents(__DIR__ . "/../../../Types/" .$method['name'].".php", $text);
        }
    }

}
