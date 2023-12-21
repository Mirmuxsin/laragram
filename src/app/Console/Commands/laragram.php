<?php

namespace Milly\Laragram\app\Console\Commands;

use Illuminate\Console\Command;

/**
 * @no-named-arguments
 */
class laragram extends Command
{
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
    protected array $updateProperties;

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
                $not_required = false;
                $arguments .= "     /**\n     * ";
                foreach ($method['arguments'] as $count_arg => $argument) {
                    $arguments .= "@var ";

//                    if($argument['name'] == 'reply_markup') {
//                        $function .= "string|";
//                        $arguments .= "string|";
//                    }

                    $has_reference = false;
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
                                $arguments .= $type['type']. $has_reference ? 'string ' : ' ';
                                $function .= $type['type']. $has_reference ? 'string ' :' ';
                            }
                        }
                        $argument['type'] = null;
                    }
                    elseif ($argument['type']== 'reference'){
                        $argument['type'] = "\Milly\Laragram\Types\\".$argument['reference'];
                        $function .= "string|".$argument['type'];
                    } elseif ($argument['type'] == 'integer') {
                        $argument['type'] = 'int';
                        $function .= $argument['type'];
                    } else {
                        $function .= $argument['type'];
                    }
                    if (!$argument['required']) {
                        $not_required = true;
                    }
                    $arguments .= $argument['type'].
                        ($argument['required'] ? '':'|null').
                        " $".$argument['name']." ".
                        (array_key_exists('min_len', $argument) ? '*(min length: '.$argument['min_len'].')*':null).
                        (array_key_exists('max_len', $argument) ? '*(max length: '.$argument['min_len'].')*':null).
                        (array_key_exists('default', $argument) ? '*(default: '.$argument['default'].')*':null)
                        ." ".$this->filterDescription($argument['description'])."\n     * ";
                    if ($not_required) {
                        $function .= " $".$argument['name']." = null, ";
                    } else {
                        $function .= " $".$argument['name'].", ";
                    }
                }
            }
            $function .= ") {
        return static::request('".$method['name']."', func_get_args_associative());
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
abstract class Methods
{
    abstract static function request (string \$method, array \$array): array;

$arguments
}

    /**
     * Get function arguments as associative array
     * (same as func_get_args() but with keys)
     *
     * @param bool \$populateMissingArgumentsWithDefaults whether to populate the array with default values for missing arguments
     *
     * @return array
     */
    function func_get_args_associative(bool \$populateMissingArgumentsWithDefaults = false): array
    {
        \$trace = debug_backtrace(0, 2)[1];
        \$reflection = null;
        if (isset(\$trace['class'])) {
            \$reflection = new \ReflectionMethod(\$trace['class'], \$trace['function']);
        } else {
            \$reflection = new \ReflectionFunction(\$trace['function']);
        }
        \$ret = [];
        foreach (\$reflection->getParameters() as \$param) {
            if (array_key_exists(\$param->getPosition(), \$trace['args'])) {
                \$ret[\$param->name] = \$trace['args'][\$param->getPosition()];
            } elseif (\$populateMissingArgumentsWithDefaults) {
                // because of the \"required arguments declared after an optional argument are implicitly required\" rule:
                assert(\$param->isDefaultValueAvailable(), \"i think all params are either in trace[args] or have default values\");
                \$ret[\$param->name] = \$param->getDefaultValue();
            }
        }
        return \$ret;
    }";
        file_put_contents(__DIR__ . "/../../../Methods/Methods.php", $text);
    }

    private function putObject ($method) {
        $functions = "";
        $comments = "";

        if ($method['name'] == 'Update') {
            $this->setUpdateProperties($method['properties']);
            $functions .= "    public function __construct()
    {
        \$data = Handler::get();
";
        } elseif (in_array($method['name'], $this->updateProperties)) {
            $functions .= "    public function __construct(\$data = null)
    {
        if (\$data == null) \$data = Handler::get()['".strtolower(preg_replace('/(.)([A-Z])/', '$1_$2', $method['name']))."'];
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
    * ".$this->filterDescription($argument['description'])."
    * @var ".$argument['type'].($argument['required'] ? null:"|null")."
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
 *".$this->filterDescription($argument['description'])."
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

    private function setUpdateProperties (array $properties)
    {
        foreach ($properties as $property) {
            if ($property['type'] != 'reference') continue;
            $this->updateProperties[] = $property['reference'];
        }
    }

    private function filterDescription (string $markdownText) {
        // Convert headers (e.g., # Header) to <h1> tags
        $markdownText = preg_replace('/^(#{1,6})\s+(.*)$/m', '<h$1>$2</h$1>', $markdownText);

        // Convert bold (e.g., **bold text**) to <strong> tags
        $markdownText = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $markdownText);

        // Convert italic (e.g., _italic text_) to <em> tags
        $markdownText = preg_replace('/_(.*?)_/', '<em>$1</em>', $markdownText);

        // Convert links (e.g., [Link](url)) to <a> tags
        $markdownText = preg_replace('/\[(.*?)\]\((.*?)\)/', '<a href="$2">$1</a>', $markdownText);

        // Convert paragraphs
        $markdownText = '<p>' . preg_replace('/\n\n/', '</p><p>', $markdownText) . '</p>';

        return $markdownText;
    }

}
