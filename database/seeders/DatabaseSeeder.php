<?php

namespace Database\Seeders;

use App\Models\Bedroom;
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
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(BedroomSeeder::class);
        $this->call(UserSeeder::class);
        
    }
}
