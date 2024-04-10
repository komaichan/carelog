<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'こまいちゃん',
            'email' => '103pen@gmail.com',
            'password' => bcrypt('miki1995918'),
        ]);
    }
}
