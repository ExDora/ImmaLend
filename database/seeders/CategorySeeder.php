<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology', 'code_prefix' => 'TEK', 'icon' => 'monitor', 'is_facility' => false],
            ['name' => 'Music',      'slug' => 'music',      'code_prefix' => 'MUS', 'icon' => 'music',   'is_facility' => false],
            ['name' => 'Facilities', 'slug' => 'facilities', 'code_prefix' => 'RM',  'icon' => 'key',     'is_facility' => true],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['slug' => $category['slug']], $category);
        }
    }
}
