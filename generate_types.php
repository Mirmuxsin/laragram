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

    public function run(bool $typesOnly = false): void
    {
        $this->output->progress("Starting Telegram Bot API Type Generation...");
        
        try {
            if ($typesOnly) {
                $this->output->info("Generating types only (no documentation)...");
                $stats = $this->generator->generateTypesOnly();
                $this->output->success("Generation completed successfully!");
                $this->output->showStats($stats);
            } else {
                $this->output->info("Generating types and documentation...");
                $stats = $this->generator->generate();
                $this->output->success("Generation completed successfully!");
                $this->output->showStats($stats);
                $this->output->info("📚 Documentation generated in: docs/");
                $this->output->info("🌐 Deploy to GitHub Pages: git add docs/ && git commit -m 'Update docs' && git push");
            }
            
        } catch (Exception $e) {
            $this->output->error("Error: " . $e->getMessage());
            echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
            exit(1);
        }
    }
}

// Main execution
$typesOnly = in_array('--types-only', $argv) || in_array('-t', $argv);

$generator = new StandaloneGenerator();
$generator->run($typesOnly);

if (!$typesOnly) {
    echo "\n🚀 Documentation Generation Complete!\n";
    echo "📁 Documentation saved to: docs/\n";
    echo "🌐 To deploy to GitHub Pages:\n";
    echo "   1. Enable GitHub Pages in repository settings\n";
    echo "   2. Set source to 'docs' folder\n";
    echo "   3. Push changes: git add docs/ && git commit -m 'Update docs' && git push\n";
    echo "   4. Your docs will be available at: https://yourusername.github.io/laragram\n\n";
}