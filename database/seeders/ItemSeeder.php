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

        // [category, code, name, location, quantity, available]
        $items = [
            ['Technology', 'TEK-001', 'HP Chromebook', 'Computer Lab 1', 7, 3],
            ['Technology', 'TEK-002', 'Lenovo Ideapad', 'Computer Lab 1', 30, 29],
            ['Technology', 'TEK-003', 'Router TP-Link', 'Computer Lab 2', 10, 6],
            ['Technology', 'TEK-004', 'Monitor LG 24 Inch', 'Computer Lab 2', 4, 1],
            ['Technology', 'TEK-005', 'Keyboard Logitech', 'Computer Lab 2', 3, 2],
            ['Technology', 'TEK-006', 'Epson EB X05 Projector', 'Storage Room', 5, 2],
            ['Technology', 'TEK-007', 'DJI Mini 3 Drone', 'Multimedia Room', 15, 12],
            ['Technology', 'TEK-008', 'Power Strip', 'Storage Room', 2, 1],
            ['Technology', 'TEK-009', 'Sony SLT A65V', 'Multimedia Room', 1, 1],
            ['Technology', 'TEK-010', 'Nikon Coolpix', 'Multimedia Room', 1, 1],
            ['Room', 'RM-002', 'Co-Working', 'Main Building', 1, 1],
            ['Room', 'RM-004', 'Studio', 'Main Building', 1, 1],
            ['Music', 'MUS-003', 'Microphone', 'Music Room', 6, 5],
            ['Music', 'MUS-007', 'Amplifier Fender', 'Music Room', 2, 2],
        ];

        foreach ($items as [$category, $code, $name, $location, $quantity, $available]) {
            Item::create([
                'category_id' => $categoryIds[$category],
                'code' => $code,
                'name' => $name,
                'location' => $location,
                'condition' => 'good',
                'quantity' => $quantity,
                'available' => $available,
            ]);
        }
    }
}
