<?php

namespace Milly\Laragram\Generator;

/**
 * Handles console output for the generator
 * Single Responsibility: Only handles output formatting
 */
class ConsoleOutput
{
    public function info(string $message): void
    {
        echo "📋 " . $message . "\n";
    }

    public function success(string $message): void
    {
        echo "✅ " . $message . "\n";
    }

    public function error(string $message): void
    {
        echo "❌ " . $message . "\n";
    }

    public function progress(string $message): void
    {
        echo "🚀 " . $message . "\n";
    }

    public function showProgress(int $current, int $total, string $type): void
    {
        if ($current % 10 == 0 || $current == $total) {
            echo "   Progress: " . $current . "/" . $total . " " . $type . "\n";
        }
    }

    public function showStats(array $stats): void
    {
        echo "\n📊 Generation Statistics:\n";
        echo "   Methods: " . $stats['methods_count'] . "\n";
        echo "   Types: " . $stats['types_count'] . "\n";
        echo "   API Version: " . $stats['api_version'] . "\n";
        echo "   Thanks to OpenAPI (https://ark0f.github.io/tg-bot-api)\n";
    }
}