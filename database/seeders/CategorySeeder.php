<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['Technology', 'TEK'],
            ['Room', 'RM'],
            ['Music', 'MUS'],
        ];

        foreach ($categories as [$name, $prefix]) {
            Category::create(['name' => $name, 'code_prefix' => $prefix]);
        }
    }
}
