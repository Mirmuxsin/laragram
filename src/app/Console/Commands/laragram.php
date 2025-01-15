<?php

namespace Milly\Laragram\app\Console\Commands;

use Illuminate\Console\Command;

class laragram extends Command
{
    protected $signature = 'laragram:update-api';
    protected $description = 'Update to latest bot api and regenerate classes and methods';
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

    private function putMethod($methods, $bar)
    {
        $arguments = "";
        foreach ($methods as $method) {
            $function = "    public static function " . $method['name'] . " (";
            if (isset($method['arguments'])) {
                $not_required = false;
                $arguments .= "     /**\n     * ";
                foreach ($method['arguments'] as $argument) {
                    $arguments .= "@var ";
                    if ($argument['type'] == 'any_of') {
                        foreach ($argument['any_of'] as $key => $type) {
                            $type['type'] = $type['type'] == 'reference' ? "\Milly\Laragram\Types\\".$type['reference'] : ($type['type'] == 'integer' ? 'int' : $type['type']);
                            $arguments .= $type['type'].($key != count($argument['any_of'])-1 ? '|' : ' ');
                            $function .= $type['type'].($key != count($argument['any_of'])-1 ? '|' : ' ');
                        }
                        $argument['type'] = null;
                    } else {
                        $argument['type'] = $argument['type'] == 'reference' ? "\Milly\Laragram\Types\\".$argument['reference'] : ($argument['type'] == 'integer' ? 'int' : $argument['type']);
                        $function .= $argument['type'];
                    }
                    $not_required = !$argument['required'];
                    $arguments .= $argument['type'].($argument['required'] ? '' : '|null')." $".$argument['name']." ".(array_key_exists('min_len', $argument) ? '*(min length: '.$argument['min_len'].')*' : '').(array_key_exists('max_len', $argument) ? '*(max length: '.$argument['max_len'].')*' : '').(array_key_exists('default', $argument) ? '*(default: '.$argument['default'].')*' : '')." ".$this->filterDescription($argument['description'])."\n     * ";
                    $function .= " $".$argument['name'].($not_required ? ' = null' : '').", ";
                }
            }
            $function .= ") {
        return static::request('".$method['name']."', func_get_args_associative());
    }\n\n";
            if (isset($method['arguments'])) {
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
        \$reflection = isset(\$trace['class']) ? new \ReflectionMethod(\$trace['class'], \$trace['function']) : new \ReflectionFunction(\$trace['function']);
        \$ret = [];
        foreach (\$reflection->getParameters() as \$param) {
            if (array_key_exists(\$param->getPosition(), \$trace['args'])) {
                \$ret[\$param->name] = \$trace['args'][\$param->getPosition()];
            } elseif (\$populateMissingArgumentsWithDefaults) {
                assert(\$param->isDefaultValueAvailable(), 'i think all params are either in trace[args] or have default values');
                \$ret[\$param->name] = \$param->getDefaultValue();
            }
        }
        return \$ret;
    }";
        file_put_contents(__DIR__ . "/../../../Methods/Methods.php", $text);
    }

    private function putObject($method)
    {
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
        } elseif (isset($method['type']) && $method['type'] == 'any_of') {
            $functions .= "    public function __construct(\$data)
    {\n";

            $properties = "";

            foreach ($method['any_of'] as $type) {
                $functions .= '        $this->'.lcfirst($type['reference']).' = new '.$type['reference']."(\$data);\n";
                $properties .= "    public ".$type['reference']." $".lcfirst($type['reference']).";\n\n";
            }
            $functions .= "    }";

            $text = "<?php

namespace Milly\Laragram\Types;

/**
* ".$method['name']."
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url ".$method['documentation_link']."
 */
class ".$method['name']."
{
$comments

$properties

$functions
}";

            file_put_contents(__DIR__ . "/../../../Types/" .$method['name'].".php", $text);
        } else {
            $functions .= "    public function __construct(\$data)
    {
";
        }
        if (isset($method['properties'])) {
            foreach ($method['properties'] as $argument) {
                $argument['type'] = $argument['type'] == 'integer' ? 'int' : ($argument['type'] == "reference" ? $argument['reference'] : $argument['type']);
                $comments .= "    /**
    * ".$this->filterDescription($argument['description'])."
    * @var ".$argument['type'].($argument['required'] ? '' : "|null")."
    */
    public ".($argument['required'] ? '' : "?").$argument['type']." $".$argument['name'].($argument['required'] ? '' : " = null").";\n\n";

                if (!$argument['required']) {
                    $functions .= "        if (isset(\$data['".$argument['name']."'])){\n";
                    $functions .= isset($argument['reference']) ? '            $this->'.$argument['name'].' = new '.$argument['type'].'($data[\''.$argument['name']."']);\n        }\n\n" : '            $this->'.$argument['name'].' = $data[\''.$argument['name']."'];\n        }\n\n";
                } else {
                    $functions .= isset($argument['reference']) ? '        $this->'.$argument['name'].' = new '.$argument['type'].'($data[\''.$argument['name']."']);\n\n" : '        $this->'.$argument['name'].' = $data[\''.$argument['name']."'];\n";
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

    private function setUpdateProperties(array $properties)
    {
        foreach ($properties as $property) {
            if ($property['type'] == 'reference') {
                $this->updateProperties[] = $property['reference'];
            }
        }
    }

    private function filterDescription(string $markdownText)
    {
        $markdownText = preg_replace('/^(#{1,6})\s+(.*)$/m', '<h$1>$2</h$1>', $markdownText);
        $markdownText = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $markdownText);
        $markdownText = preg_replace('/_(.*?)_/', '<em>$1</em>', $markdownText);
        $markdownText = preg_replace('/\[(.*?)\]\((.*?)\)/', '<a href="$2">$1</a>', $markdownText);
        $markdownText = '<p>' . preg_replace('/\n\n/', '</p><p>', $markdownText) . '</p>';
        return $markdownText;
    }
}
