<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\States;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsersFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'state_id' => States::inRandomOrder()->first()->id,
            'username' => fake('es-CO')->firstName(),
            'password' => static::$password ??= Hash::make('password'),
            'first_name' => fake('es-CO')->firstName(),
            'last_name'=> fake('es-CO')->lastName(),
            'email' => fake('es-CO')->unique()->safeEmail(),
            'phone' => fake('es-CO')->phoneNumber(),
            'document_number' => fake('es-CO')->unique()->randomNumber(8),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
