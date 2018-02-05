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
            'password' => \Illuminate\Support\Facades\Hash::make('12345')
        ]);
    }
}
