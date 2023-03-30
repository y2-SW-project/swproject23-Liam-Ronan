<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking;
use App\Models\Services;
use Illuminate\Database\Seeder;
use Database\Seeders\BarberSeeder;
use Database\Seeders\ServicesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(BarberSeeder::class);

        /*  \App\Models\User::factory(10)->create(); */





        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
