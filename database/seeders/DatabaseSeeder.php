<?php

namespace Database\Seeders;
use App\Models\User_admin;
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
        User_admin::create([
            'email' => 'anisa@gmail.com',
            'password' => '123456789'
        ]);
    }
}
