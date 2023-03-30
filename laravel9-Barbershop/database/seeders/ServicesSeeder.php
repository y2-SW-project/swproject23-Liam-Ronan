<?php

namespace Database\Seeders;


use App\Models\Services;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'haircut' => 'Haircut adults',
                'description' => 'hello',
                'price' => 20.00,
                'duration' => '30 mins'
            ],
            [
                'haircut' => 'Beard Trim',
                'description' => 'hello',
                'price' => 10.00,
                'duration' => '30 mins'
            ],
            [
                'haircut' => 'Shave',
                'description' => 'hello',
                'price' => 15.00,
                'duration' => '30 mins'
            ],
            // Add more services as needed
        ];

        foreach ($services as $service) {
            Services::create($service);
        }
    }
}
