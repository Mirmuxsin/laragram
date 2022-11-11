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
        $token = config('laragram.token');

        if (empty($token)) {
            $this->error('Telegram bot token is required');
            exit();
        }

        if (!$this->existTunnel()) return;
        $url = $this->serve();

        $this->info('Webhook address: ' . $url.config('laragram.url'));
        file_get_contents("https://api.telegram.org/bot" . $token . "/setWebhook?url=" . $url.config('laragram.url'));
        $setUrl = \Milly\Laragram\Laragram::setUrl($url.config('laragram.url'));
        $this->info('Webhook was successfully set');
        $this->call('serve');
    }

    /**
     * Check if exist localtunnel server
     *
     * @return boolean
     */
    public function existTunnel()
    {
        $expression = '/([0-9]\.?)+$/'; // Regular expression. https://regex101.com/r/r8a7eB/1

        $process = new Process(['lt', '--version']);
        $process->start();

        while ($process->isRunning()) {
            sleep(1);
            $output = $process->getOutput();

            if (!empty($output)) break;
        }

        if (!preg_match($expression, $output)) {
            $this->warn("\nLocaltunnel is not found
                \rPlease run this command in terminal:");
            $this->info("npm install --global localtunnel");

            return false;
        }

        return true;
    }

    /**
     * Start localtunnel server
     *
     * @var array $url
     * @return string
     */
    public function serve()
    {
        $expression = "/(https?:\/{2}[\w+-]+\.\w+\.\w+)$/"; // Regular expression. https://regex101.com/r/2c6sZC/1

        $process = new Process(['lt', '--port', '8000']);
        $process->start();

        while ($process->isRunning()) {
            sleep(1);
            $output = $process->getOutput();

            if (!empty($output)) break;
        }

        if (!preg_match($expression, $output, $url)) {
            $this->error("\nLocaltunnel didn't return url");

            exit();
        }

        return $url[0]; // return webhook payload url
    }
}
