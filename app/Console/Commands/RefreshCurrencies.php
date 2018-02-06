<?php

namespace App\Console\Commands;

use App\Cripto;
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
            'BTCUSD',
            'ETHUSD',
            'BCHUSD'
        ];

        $user = User::where('name', 'Victor')->first();

        $client = new \Hitbtc\ProtectedClient( $user->hitbtc_public_key, $user->hitbtc_private_key, $demo = false);

        $currencies = Cripto::get();

        try {

            foreach ($currencies as $currency ) {

                $ticker = $client->getTicker( $currency->symbol );

                Cripto::where('symbol', $currency->symbol)->update(['price' => $ticker['last']]);

                $this->info('Updating ' . $currency->symbol . ' to: ' . $ticker['last']);
            }

            $this->info('Currencies updated.');
            
            return $ticker;

        } catch (\Hitbtc\Exception\InvalidRequestException $e) {
            echo $e;
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
