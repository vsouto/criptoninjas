<?php

namespace App\Console\Commands;

use App\Cripto;
use App\User;
use Illuminate\Console\Command;

class RefreshBalances extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:balances';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $users = User::has('criptos')->get();

        $balance = 0;

        foreach ($users as $user) {

            foreach ($user->criptos as $cripto) {
                $balance += $cripto->wallet->amount * $cripto->price;
            }

            $user->update(['balance' => $balance]);

            $this->info('Updating user ' . $user->name . ' to: ' . $balance);
        }

        $this->info('Update finished.');
    }
}
