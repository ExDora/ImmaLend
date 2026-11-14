<?php

namespace Database\Factories;

use App\Enums\Role;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Default: akun Student aktif dengan password "password".
     * (Kelas disimpan di tabel user_profiles, bukan di users.)
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->userName() . '@ski.sch.id',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'role' => Role::Student,
            'status' => UserStatus::Active,
            'remember_token' => Str::random(10),
        ];
    }

    public function admin(): static
    {
        return $this->state(fn() => ['role' => Role::Admin]);
    }

    public function teacher(): static
    {
        return $this->state(fn() => ['role' => Role::Teacher]);
    }

    public function student(): static
    {
        return $this->state(fn() => ['role' => Role::Student]);
    }

    public function inactive(): static
    {
        return $this->state(fn() => ['status' => UserStatus::Inactive]);
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn() => [
            'email_verified_at' => null,
        ]);
    }
}
