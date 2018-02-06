<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $victor = \App\User::create([
            'name' => 'Victor',
            'email' => 'souto.victor@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('12345'),
            'active_client' => '1',
            'hitbtc_public_key' => 'c5e32c1d54b7aa8358c6a3556ef3dc49',
            'hitbtc_private_key' => '4d81e5986651d45a2091f2d420fe80a9',
        ]);
    }
}
