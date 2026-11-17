<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Lending;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lending>
 */
class LendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $borrowAt = fake()->dateTimeBetween('-1 month', '+1 week');

        return [
            'user_id' => User::factory(),
            'item_id' => Item::factory(),
            'amount' => 1,
            'borrow_at' => $borrowAt,
            'return_at' => (clone $borrowAt)->modify('+3 hours'),
            'reason' => fake()->sentence(),
            'status' => fake()->randomElement(['pending', 'approved', 'rejected', 'borrowed', 'returned']),
        ];
    }
}
