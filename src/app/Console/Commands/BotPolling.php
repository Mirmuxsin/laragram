<?php

namespace Milly\Laragram\app\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class BotPolling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'botpolling:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To run telegram bot on long-polling mode';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        if ( env('TELEGRAM_BOT_TOKEN') ) {
            $token = env('TELEGRAM_BOT_TOKEN');
        } else {
            $token = $this->ask('BOT TOKEN: ');
        }

        $guzzle = new Client();
        $url = "https://api.telegram.org/bot". $token . "/". "getWebhookInfo";

        $update = $this->request($url);

        $locale_url = "https://127.0.0.1:8000/api/bot".http_build_query($update);
        $update = $this->request($locale_url);

//            while (true) {
            $this->info(
                json_encode(  )
            );

            //to escape from flood
            sleep(1);
//            }

        $this->info("Telegram bot is running on long-polling mode!");
    }


    private function request ($url ) {
        global $guzzle;
        return json_decode($guzzle->request('GET', $url, ['verify' => false])->getBody()->getContents(), true);
    }
}
