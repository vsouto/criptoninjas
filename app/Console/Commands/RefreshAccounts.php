<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class RefreshAccounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:accounts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh cripto accounts';

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
        $methods = [
            'balance' => '/trading/balance',
            'login' => '/login',
            'currency' => '/public/currency'
        ];

        $apiURL = 'https://api.hitbtc.com/api/2';

        $pKey = 'c5e32c1d54b7aa8358c6a3556ef3dc49';

        $sKey = '4d81e5986651d45a2091f2d420fe80a9';

        $client = new \Hitbtc\ProtectedClient( $pKey, $sKey, $demo = false);

        try {
            foreach ($client->getBalanceTrading() as $balance) {
                echo $balance->getCurrency() . ' ' . $balance->getAvailable() . ' reserved:' . $balance->getReserved() . "\n";
            }
        } catch (\Hitbtc\Exception\InvalidRequestException $e) {
            echo $e;
        } catch (\Exception $e) {
            echo $e;
        }



        return $this->info('Result: ' . $balance);
    }
}
