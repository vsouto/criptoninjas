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
        $apiURL = 'https://api.hitbtc.com/api/2';

        $loginURL = '/login';

        $getURL = '/public/currency';

        $pKey = 'c5e32c1d54b7aa8358c6a3556ef3dc49';

        $sKey = '4d81e5986651d45a2091f2d420fe80a9';

        try {


            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => $apiURL,
                'pKey' => $pKey,
                'sKey' => $sKey,
                // You can set any number of default request options.
                'timeout'  => 60,
            ]);

            // Send a request to
            $response = $client->request('GET', $apiURL . $loginURL);

            // Decode response body
            $obj = json_decode($response->getBody());

        }
        catch (\Exception $e) {

            $return['code'] = $e->getCode();
            $return['msg'] = 'Erro ao conectar.';

            dd($e);
            return $return;
        }

        // No user returned?
        if (!$obj) {
            return $this->error('Nenhum resultado encontrado.');
        }

        return $this->info('Result: ' . $obj);
    }
}
