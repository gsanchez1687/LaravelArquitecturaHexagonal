<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Users;
use App\Models\States;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersRoles>
 */
class UsersRolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>Users::inRandomOrder()->first()->id,
            'role_id' =>States::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
