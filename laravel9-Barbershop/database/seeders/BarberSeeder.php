<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\Services;
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
        Barber::factory()->count(4)->create();

        // foreach (Services::all() as $service) {
        //     $barbers = Barber::inRandomOrder()->take(rand(1, 3))->pluck('id');
        //     $service->barber()->attach($barbers);
        // }

        foreach(Services::all() as $service) {
            $barbers = Barber::inRandomOrder()->take(rand(1,3))->pluck('id');
            $service->barber()->attach($barbers);
        }
    }
}
