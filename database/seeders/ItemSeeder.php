<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::pluck('id', 'name');

        // [category, code, name, location, quantity, available, image]
        $items = [
            ['Technology', 'TEK-001', 'HP Chromebook 15', 'Computer Lab 1', 7, 3, 'images/items/HP Chromebook 15.jpg'],
            ['Technology', 'TEK-002', 'Lenovo Ideapad 3', 'Computer Lab 1', 30, 29, 'images/items/Lenovo Ideapad 3.png'],
            ['Technology', 'TEK-003', 'Router TP-Link Archer C6', 'Computer Lab 2', 10, 6, 'images/items/Router TP-Link Archer C6.jpeg'],
            ['Technology', 'TEK-004', 'Monitor LG 24 Inch', 'Computer Lab 2', 4, 1, 'images/items/Monitor LG 24 Inch.jpg'],
            ['Technology', 'TEK-005', 'Keyboard Logitech K120', 'Computer Lab 2', 3, 2, 'images/items/Keyboard Logitech K120.jpg'],
            ['Technology', 'TEK-006', 'Epson EB X05 Projector', 'Storage Room', 5, 2, 'images/items/Epson EB X05 Projector.jpg'],
            ['Technology', 'TEK-007', 'DJI Mini 3 Drone', 'Multimedia Room', 15, 12, 'images/items/DJI Mini 3 Drone.jpg'],
            ['Technology', 'TEK-008', 'Power Strip', 'Storage Room', 2, 1, 'images/items/Power Strip.jpg'],
            ['Technology', 'TEK-009', 'Sony SLT A65V', 'Multimedia Room', 1, 1, 'images/items/Sony SLT A65V.jpeg'],
            ['Technology', 'TEK-010', 'Nikon Coolpix P1100', 'Multimedia Room', 1, 1, 'images/items/Nikon coolpix p1100.png'],

            ['Music', 'MUS-001', 'Acoustic Guitar', 'Music Room', 6, 6, 'images/items/Acoustic Guitar.jpg'],
            ['Music', 'MUS-002', 'Electric Guitar', 'Music Room', 3, 3, 'images/items/Electric Guitar.jpg'],
            ['Music', 'MUS-003', 'Microphone', 'Music Room', 6, 5, 'images/items/Microphone.webp'],
            ['Music', 'MUS-004', 'Audio Mixer Yamaha', 'Music Room', 2, 2, 'images/items/Audio Mixer Yamaha.png'],
            ['Music', 'MUS-005', 'Cajon Meinl Headliner', 'Music Room', 5, 5, 'images/items/Cajon Meinl Headliner.png'],
            ['Music', 'MUS-006', 'Drum Set Pearl Roadshow', 'Music Room', 1, 1, 'images/items/Drum Set Pearl Roadshow.png'],
            ['Music', 'MUS-007', 'Amplifier Fender', 'Music Room', 2, 2, 'images/items/Amplifier Fender.png'],
            ['Music', 'MUS-008', 'Keyboard Yamaha PSR-E373', 'Music Room', 2, 2, 'images/items/Keyboard Yamaha PSR-E373.jpg'],

            ['Room', 'RM-001', 'VCon', 'Main Building', 1, 1, 'images/rooms/VCon.jpeg'],
            ['Room', 'RM-002', 'Co-Working', 'Main Building', 1, 1, 'images/rooms/Coworking.jpeg'],
            ['Room', 'RM-003', 'Aula Tiranus 6', 'Main Building', 1, 1, 'images/rooms/Aula Tiranus 6.jpeg'],
            ['Room', 'RM-004', 'Studio', 'Main Building', 1, 1, 'images/rooms/Studio.jpeg'],
            ['Room', 'RM-005', 'Computer Lab', 'Main Building', 1, 1, 'images/rooms/IELTS Center.jpeg'],
        ];

        foreach ($items as [$category, $code, $name, $location, $quantity, $available, $image]) {
            Item::create([
                'category_id' => $categoryIds[$category],
                'code' => $code,
                'name' => $name,
                'image' => $image,
                'location' => $location,
                'condition' => 'good',
                'quantity' => $quantity,
                'available' => $available,
            ]);
        }
    }
}