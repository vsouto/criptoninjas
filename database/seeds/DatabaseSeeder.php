<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(PostsTableSeeder::class);

    }
}
