<?php

namespace Milly\Laragram\app\Console\Commands;

use Illuminate\Console\Command;
use Milly\Laragram\Generator\TypeGenerator;

class Laragram extends Command
{
    protected $signature = 'laragram:update-api {--types-only : Generate types only (no documentation)}';
    protected $description = 'Update to latest bot api and regenerate classes, methods, and documentation';

    public function handle()
    {
        $this->info('🚀 Starting Telegram Bot API Type Generation...');
        
        try {
            $generator = new TypeGenerator(
                __DIR__ . "/../../../Methods",
                __DIR__ . "/../../../Types"
            );
            
            if ($this->option('types-only')) {
                $this->info('📝 Generating types only (no documentation)...');
                $stats = $generator->generateTypesOnly();
                
                $this->info("✅ Generation completed successfully!");
                $this->info("📁 Methods generated: " . $stats['methods_count']);
                $this->info("📁 Types generated: " . $stats['types_count']);
                $this->info("🔗 Bot API version: " . $stats['api_version']);
                $this->info("🔗 Thanks to OpenAPI (https://ark0f.github.io/tg-bot-api)");
            } else {
                $this->info('📚 Generating types and documentation...');
                $stats = $generator->generate();
                
                $this->info("✅ Generation completed successfully!");
                $this->info("📁 Methods generated: " . $stats['methods_count']);
                $this->info("📁 Types generated: " . $stats['types_count']);
                $this->info("📚 Documentation generated in: docs/");
                $this->info("🔗 Bot API version: " . $stats['api_version']);
                $this->info("🔗 Thanks to OpenAPI (https://ark0f.github.io/tg-bot-api)");
                
                $this->info("\n🌐 To deploy documentation to GitHub Pages:");
                $this->info("   1. Enable GitHub Pages in repository settings");
                $this->info("   2. Set source to 'docs' folder");
                $this->info("   3. Push changes: git add docs/ && git commit -m 'Update docs' && git push");
            }
            
            return 0;
        } catch (\Exception $e) {
            $this->error("❌ Error: " . $e->getMessage());
            return 1;
        }
    }
}