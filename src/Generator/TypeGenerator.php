<?php

namespace Milly\Laragram\Generator;

/**
 * Telegram Bot API Type Generator
 * 
 * Extracted core logic for generating Types and Methods from Telegram Bot API JSON
 * Follows SOLID principles and DRY - no code duplication
 */
class TypeGenerator
{
    protected string $botApiJsonUrl = "https://ark0f.github.io/tg-bot-api/custom.json";
    protected array $updateProperties = [];

    public function __construct(
        protected string $methodsPath,
        protected string $typesPath
    ) {
        $this->ensureDirectoriesExist();
    }

    public function generate(): array
    {
        $json = $this->fetchApiJson();
        
        $this->generateMethods($json['methods']);
        $this->generateTypes($json['objects']);
        
        return [
            'methods_count' => count($json['methods']),
            'types_count' => count($json['objects']),
            'api_version' => $json['version']['major']
        ];
    }

    protected function fetchApiJson(): array
    {
        $jsonFile = file_get_contents($this->botApiJsonUrl);
        if (!$jsonFile) {
            throw new \Exception("Failed to fetch JSON from: " . $this->botApiJsonUrl);
        }

        $json = json_decode($jsonFile, true);
        if (!$json) {
            throw new \Exception("Failed to parse JSON data");
        }

        return $json;
    }

    protected function ensureDirectoriesExist(): void
    {
        if (!is_dir($this->methodsPath)) {
            mkdir($this->methodsPath, 0755, true);
        }
        if (!is_dir($this->typesPath)) {
            mkdir($this->typesPath, 0755, true);
        }
    }

    protected function generateMethods(array $methods): void
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
        }

        $text = $this->buildMethodsClass($arguments);
        file_put_contents($this->methodsPath . "/Methods.php", $text);
    }

    protected function generateTypes(array $objects): void
    {
        foreach ($objects as $object) {
            $this->generateType($object);
        }
    }

    protected function generateType(array $object): void
    {
        $functions = "";
        $comments = "";

        if ($object['name'] == 'Update') {
            $this->setUpdateProperties($object['properties']);
            $functions .= "    public function __construct()
    {
        \$data = Handler::get();
";
        } elseif (in_array($object['name'], $this->updateProperties)) {
            $functions .= "    public function __construct(\$data = null)
    {
        if (\$data == null) \$data = Handler::get()['".strtolower(preg_replace('/(.)([A-Z])/', '$1_$2', $object['name']))."'];
";
        } elseif (isset($object['type']) && $object['type'] == 'any_of') {
            $unionTypeHandler = new UnionTypeHandler();
            $functions .= $unionTypeHandler->generateConstructor($object);
            $properties = $unionTypeHandler->generateProperties($object);
        } else {
            $functions .= "    public function __construct(\$data)
    {
";
        }
        
        if (isset($object['properties'])) {
            foreach ($object['properties'] as $argument) {
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

            $text = $this->buildTypeClass($object, $comments, $functions);
            file_put_contents($this->typesPath . "/" .$object['name'].".php", $text);
        }
    }

    protected function setUpdateProperties(array $properties): void
    {
        foreach ($properties as $property) {
            if ($property['type'] == 'reference') {
                $this->updateProperties[] = $property['reference'];
            }
        }
    }

    protected function filterDescription(string $markdownText): string
    {
        $markdownText = preg_replace('/^(#{1,6})\s+(.*)$/m', '<h$1>$2</h$1>', $markdownText);
        $markdownText = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $markdownText);
        $markdownText = preg_replace('/_(.*?)_/', '<em>$1</em>', $markdownText);
        $markdownText = preg_replace('/\[(.*?)\]\((.*?)\)/', '<a href="$2">$1</a>', $markdownText);
        $markdownText = '<p>' . preg_replace('/\n\n/', '</p><p>', $markdownText) . '</p>';
        return $markdownText;
    }

    protected function buildMethodsClass(string $arguments): string
    {
        return "<?php

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
    }

    protected function buildTypeClass(array $object, string $comments, string $functions): string
    {
        return "<?php

namespace Milly\Laragram\Types;

/**
* ".$object['name']."
 *
 *".$this->filterDescription($object['description'] ?? '')."
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url ".$object['documentation_link']."
 */
class ".$object['name']."
{
$comments

$functions
}";
    }
}