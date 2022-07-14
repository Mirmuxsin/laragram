<?php

namespace Milly\Laragram\app\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class longpolling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laragram:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run telegram bot on longpolling mode';

    /**
     * Execute the console command.
     *
     * @return void
     */

    public function handle()
    {
        $this->info('Telegram bot starting on long-polling mode...');
        $token = env('TELEGRAM_BOT_TOKEN');

        $process = new Process(['npx', 'lt', '--port', '8000']);
        $process->start();
        $url = null;
        while ($process->isRunning()) {
            sleep(0.5);
            $output = $process->getOutput();
            if (preg_match('#https://[\w\-.]+#', $output, $matches)) {
                $url = $matches[0] . route('/', absolute: false);
                break;
            }
        }
        if ($url === null) {
            $this->error('Localtunnel didn\'t return url');
            return 1;
        }
        $this->info('Webhook adress: ' . $url);
        file_get_contents("https://api.telegram.org/bot".$token."/setWebhook?url=$url");
        $this->call('serve');
    }
}
