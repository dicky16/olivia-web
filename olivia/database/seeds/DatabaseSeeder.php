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
        // $this->call(UserSeeder::class);
        \App\Role::create([
            'role'  => 'admin',
        ]);
        \App\Role::create([
            'role'  => 'user',
        ]);
    }
}
