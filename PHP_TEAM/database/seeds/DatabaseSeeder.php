<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemsTableSeeder::class); //追記 
        $this->call(UsersTableSeeder::class); //追記 
    }
}
