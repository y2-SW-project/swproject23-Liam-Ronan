<?php

namespace Database\Seeders;

use App\Models\Barber;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barber::factory()
            ->times(2)
            ->hasBooking(2)
            ->create();
    }
}
