<?php

namespace App\Console\Commands;

use App\Mail\Newsletter;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class FireNewsletter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fire:newsletter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fire Newsletters to users';

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

        $user = User::where('email', 'souto.victor@gmail.com')->first();

        Mail::to($user)->send(new Newsletter());
    }
}
