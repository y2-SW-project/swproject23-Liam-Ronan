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
                'haircut' => 'Taper',
                'description' => 'A taper haircut works well with the majority of mens hair cut styles. It keeps the hair on the sides neatly trimmed while drawing attention to the top. So, you are free to choose any style, be it a simple Ivy League or a more elaborate pompadour.',
                'price' => 20.00,
                'duration' => '30 mins',
            ],
            [
                'haircut' => 'Buzz Cut',
                'description' => 'A buzz cut is an extremely short man hair cut that can be achieved by simply buzzing all of your hair off with the help of a hair clipper, hence the name. Because it is so easy to get, you do not have to pay a visit to the hair salon but can cut your own hair instead.',
                'price' => 10.00,
                'duration' => '30 mins',
            ],
            [
                'haircut' => 'Undercut',
                'description' => 'Similar to a fade, an undercut is one of the most popular types of haircut for men. It also involves trimming the hair on the sides and back. Yet, unlike a fade, it does not blend seamlessly into the top but creates quite a stiff transition instead. Thanks to this, your hairstyle looks high contrast and sharp.',
                'price' => 15.00,
                'duration' => '30 mins',
                
            ],
            [
                'haircut' => 'Crew Cut',
                'description' => 'Men who cannot be bothered with the exhausting styling of their hair, go for a crew cut. This bold and daring haircut allows you to show off your chiseled facial features like no other. Besides, it is one of those guys cuts that require low to zero maintenance, as you can simply hop out of the shower, rub the hair with a towel and you are good to go.',
                'price' => 12.00,
                'duration' => '30 mins',
            ],
            [
                'haircut' => 'Ivy League',
                'description' => 'An Ivy League haircut is an elongated version of a crew cut. Because the hair on top is relatively long, you can define it with a parting. To open up your face and make it visually longer, push the front section of your hair upward. This will create a subtle pompadour on top.',
                'price' => 12.00,
                'duration' => '30 mins',
            ],
            [
                'haircut' => 'Long Top & Short Side',
                'description' => 'A long top short sides is one of those types of hairstyles for men that will never go out of fashion. This is a timeless classic that looks appropriate in absolutely any ambiance. Besides, it can be pulled off on any hair type and looks flattering on all face shapes.',
                'price' => 12.00,
                'duration' => '30 mins',
            ],
            [
                'haircut' => 'French Crop',
                'description' => 'A French crop is a men hair cut that you would hardly confuse with anything else. It features a long textured fringe while the hair on top is cut so that it is of the same length across the head as the fringe. The sides are usually trimmed short to keep the focus on the top of your head.',
                'price' => 12.00,
                'duration' => '30 mins',
            ],
            [
                'haircut' => 'Skin Fade',
                'description' => 'Skin fade is another way to add some more drama to your outlook. The truth is that this type of hair fade does not involve much hair at that point since the cut is actually incorporated into your skin. The best way to pair such a fade would be with short to medium hair on top and quite sick facial hair.',
                'price' => 15.00,
                'duration' => '30 mins',
            ],
            // Add more services as needed
        ];

        foreach ($services as $service) {
            Services::create($service);
        }
    }
}
