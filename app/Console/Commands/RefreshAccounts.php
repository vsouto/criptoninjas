<?php

namespace App\Console\Commands;

use App\Cripto;
use App\User;
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

        // Get Active Clients
        $active_clients = User::activeClient()->with('criptos')->get();

        foreach ($active_clients as $user) {

            if (!$user || !$user->hitbtc_public_key || !$user->hitbtc_private_key) {
                // add log error for this user
                continue;
            }

            $this->info('Getting balance info for: ' . $user->name);

            $client = new \Hitbtc\ProtectedClient( $user->hitbtc_public_key, $user->hitbtc_private_key, $demo = false);

            try {
                foreach ($client->getBalanceTrading() as $balance) {

                    $cripto = Cripto::where('base', $balance->getCurrency())
                        ->where('quote', 'USD')
                        ->first();

                    // Detach the cripto
                    if ($user->criptos->where('base',$balance->getCurrency())->first())
                        $user->criptos()->detach($cripto->id);

                    // Have funds?
                    if ($balance->getAvailable() > 0) {
                        // Attach the cripto for this user
                        $user->criptos()->attach($cripto, ['amount' => $balance->getAvailable()]);
                    }

                    // Info
                    echo $balance->getCurrency() . ' ' . $balance->getAvailable() . ' reserved:' . $balance->getReserved() . "\n";
                }

            } catch (\Hitbtc\Exception\InvalidRequestException $e) {
                echo $e;
            } catch (\Exception $e) {
                echo $e;
            }
        }

        return $this->info('Finished.');
    }
}
