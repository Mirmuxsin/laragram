<?php

namespace Milly\Laragram\app\Console\Commands;

use Illuminate\Console\Command;
use Milly\Laragram\Generator\TypeGenerator;

class Laragram extends Command
{
    protected $signature = 'laragram:update-api';
    protected $description = 'Update to latest bot api and regenerate classes and methods';

    public function handle()
    {
        $this->info('🚀 Starting Telegram Bot API Type Generation...');
        
        try {
            $generator = new TypeGenerator(
                __DIR__ . "/../../../Methods",
                __DIR__ . "/../../../Types"
            );
            
            $stats = $generator->generate();
            
            $this->info("✅ Generation completed successfully!");
            $this->info("📁 Methods generated: " . $stats['methods_count']);
            $this->info("📁 Types generated: " . $stats['types_count']);
            $this->info("🔗 Bot API version: " . $stats['api_version']);
            $this->info("🔗 Thanks to OpenAPI (https://ark0f.github.io/tg-bot-api)");
            
            return 0;
        } catch (\Exception $e) {
            $this->error("❌ Error: " . $e->getMessage());
            return 1;
        }
    }
}