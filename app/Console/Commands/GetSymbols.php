<?php

namespace App\Console\Commands;

use App\Cripto;
use App\User;
use Illuminate\Console\Command;

class GetSymbols extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:symbols';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get symbols';

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
        $user = User::where('name', 'Victor')->first();

        $client = new \Hitbtc\ProtectedClient( $user->hitbtc_public_key, $user->hitbtc_private_key, $demo = false);

        try {

            $symbols = $client->getSymbols();

            foreach($symbols as $symbol) {

                dump($symbol);
                $cripto = Cripto::updateOrCreate(['symbol' => $symbol['id']],
                    [
                        'base' => $symbol['baseCurrency'],
                        'quote' => $symbol['quoteCurrency'],
                        'symbol' => $symbol['id'],
                    ]
                );

                $this->info('Updating ' . $symbol['id']);
            }

            return $symbols;

        } catch (\Hitbtc\Exception\InvalidRequestException $e) {
            echo $e;
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
