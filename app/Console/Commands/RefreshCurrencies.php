<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class RefreshCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:currencies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh all currencies';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $currencies = [

        ];

        $user = User::where('name', 'Victor')->first();

        $client = new \Hitbtc\ProtectedClient( $user->hitbtc_public_key, $user->hitbtc_private_key, $demo = false);

        try {
            $ticker = $client->getTicker('BTC');

            $this->info('Ticker: ' . $ticker);

            dd($ticker);
            return $ticker;

        } catch (\Hitbtc\Exception\InvalidRequestException $e) {
            echo $e;
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
