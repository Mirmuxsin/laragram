<?php

/**
 * Standalone Telegram Bot API Type Generator
 * 
 * Uses the extracted TypeGenerator class without requiring Laravel
 * Follows SOLID principles and DRY - no code duplication
 * 
 * Usage: php generate_types.php
 */

require_once 'vendor/autoload.php';

use Milly\Laragram\Generator\TypeGenerator;
use Milly\Laragram\Generator\ConsoleOutput;

class StandaloneGenerator
{
    private TypeGenerator $generator;
    private ConsoleOutput $output;

    public function __construct()
    {
        $this->output = new ConsoleOutput();
        $this->generator = new TypeGenerator(
            __DIR__ . '/src/Methods',
            __DIR__ . '/src/Types'
        );
    }

    public function run(): void
    {
        $this->output->progress("Starting Telegram Bot API Type Generation...");
        
        try {
            $stats = $this->generator->generate();
            
            $this->output->success("Generation completed successfully!");
            $this->output->showStats($stats);
            
        } catch (Exception $e) {
            $this->output->error("Error: " . $e->getMessage());
            echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
            exit(1);
        }
    }
}

// Main execution
$generator = new StandaloneGenerator();
$generator->run();