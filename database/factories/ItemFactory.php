<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quantity = fake()->numberBetween(1, 30);

        return [
            'category_id' => Category::factory(),
            'code' => fake()->unique()->bothify('TEK-###'),
            'name' => fake()->words(2, true),
            'location' => fake()->randomElement(['Computer Lab 1', 'Computer Lab 2', 'Storage Room']),
            'condition' => 'good',
            'specifications' => fake()->sentence(),
            'quantity' => $quantity,
            'available' => fake()->numberBetween(0, $quantity),
        ];
    }
}
