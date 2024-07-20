<?php

namespace Milly\Laragram\app\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
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
    protected $description = 'Run telegram bot on long-polling mode';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->info('Waiting for updates...');
        $offset = 0;

        while (true) {

            $updates = \Milly\Laragram\Laragram::getUpdates(
                offset: $offset,
            );

            $request = new Client();

            if (isset($updates['result']) and !empty($updates['result'])) {
                $this->info('Received updates: ' . json_encode($updates));
                foreach ($updates['result'] as $update) {
                    $this->info('Processing update: ' . json_encode($update));
                    $this->newLine();

                    $response = $request->post(config('app.url').config('laragram.url'), [
                        'form_params' => $update
                    ]);

                    $this->info('Response: '.$response->getBody()->getContents());

                    $offset = $update['update_id'] + 1;
                }
            }

            sleep(1);
        }
    }
}
