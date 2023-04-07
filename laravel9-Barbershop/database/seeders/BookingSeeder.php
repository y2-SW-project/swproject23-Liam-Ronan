<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barber;
use App\Models\Booking;
use App\Models\Services;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barbers = Barber::all();
        $services = Services::all();
        $users = User::all();

        Booking::factory()->count(12)->make()->each(function ($booking) use ($barbers, $services, $users) {
            $booking->barber_id = $barbers->random()->id;
            $booking->services_id = $services->random()->id;
            $booking->user_id = $users->random()->id;
            $booking->save();
        });
    }
}
