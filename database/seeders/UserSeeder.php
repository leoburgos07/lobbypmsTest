<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('12345678'),
            'rols_id' => 1
        ]);
        User::create([
            'name' => "Usuario 1",
            'email' => "user1@gmail.com",
            'password' => Hash::make('12345678'),
            'rols_id' => 2
        ]);
        User::create([
            'name' => "Usuario 2",
            'email' => "user2@gmail.com",
            'password' => Hash::make('12345678'),
            'rols_id' => 2
        ]);
    }
}
