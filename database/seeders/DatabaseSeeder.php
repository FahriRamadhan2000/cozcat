<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User_admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User_admin::create([
            'name' => 'Anisa',
            'username' => 'anisa123',
            'email' => 'anisa@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
