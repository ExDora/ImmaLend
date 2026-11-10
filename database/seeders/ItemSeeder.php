<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Item contoh dari desain (halaman Inventory, List of Items, Borrowing Requests).
     * Kode & jumlah mengikuti desain; beberapa kode di desain saling bertabrakan,
     * jadi di sini sudah dirapikan agar unik.
     */
    public function run(): void
    {
        $items = [
            // category, code, name, quantity, location, specifications
            ['technology', 'TEK-001', 'HP Chromebook 15', 7, 'Computer Lab 1', null],
            ['technology', 'TEK-002', 'Lenovo IdeaPad', 30, 'Computer Lab 1', null],
            ['technology', 'TEK-003', 'Router TP-Link', 10, 'Computer Lab 2', null],
            ['technology', 'TEK-004', 'Monitor LG 24 Inch', 4, 'Computer Lab 2',
                'LG 24-inch monitor, Full HD 1920 x 1080 resolution, IPS panel, up to 75 Hz refresh rate, HDMI and VGA connectivity, and widescreen display.'],
            ['technology', 'TEK-005', 'Keyboard Logitech', 3, 'Computer Lab 2', null],
            ['technology', 'TEK-006', 'Epson EB X05 Projector', 5, 'Administration Room', null],
            ['technology', 'TEK-007', 'DJI Mini 3 Drone', 15, 'Administration Room', null],
            ['technology', 'TEK-008', 'Power Strip', 2, 'Administration Room', null],
            ['technology', 'TEK-009', 'Sony SLT A65V', 1, 'Administration Room', null],
            ['technology', 'TEK-010', 'Nikon Coolpix', 1, 'Administration Room', null],

            ['music', 'MUS-001', 'Acoustic Guitar', 2, 'Music Room', null],
            ['music', 'MUS-002', 'Electric Guitar', 1, 'Music Room', null],
            ['music', 'MUS-003', 'Microphone', 5, 'Music Room', null],
            ['music', 'MUS-004', 'Audio Mixer Yamaha', 1, 'Music Room', null],
            ['music', 'MUS-005', 'Cajon Meinl', 1, 'Music Room', null],
            ['music', 'MUS-006', 'Drum Set Pearl', 1, 'Music Room', null],
            ['music', 'MUS-007', 'Amplifier Fender', 1, 'Music Room', null],

            ['facilities', 'RM-001', 'VCon', 1, null, null],
            ['facilities', 'RM-002', 'Co-Working', 1, null, null],
            ['facilities', 'RM-003', 'Aula Tiranus 6', 1, null, null],
            ['facilities', 'RM-004', 'Studio', 1, null, null],
            ['facilities', 'RM-005', 'Computer Lab', 1, null, null],
        ];

        $categoryIds = Category::pluck('id', 'slug');

        foreach ($items as [$slug, $code, $name, $quantity, $location, $specifications]) {
            Item::withTrashed()->updateOrCreate(
                ['code' => $code],
                [
                    'category_id' => $categoryIds[$slug],
                    'name' => $name,
                    'quantity' => $quantity,
                    'location' => $location,
                    'specifications' => $specifications,
                    'condition' => 'good',
                    'status' => 'active',
                ]
            );
        }
    }
}
