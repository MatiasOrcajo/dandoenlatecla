<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('###########'),
            'dni_or_cuit' => $this->faker->randomNumber(8, true),
            'role' => $this->faker->randomElement(['admin', 'customer']),
            'password' => Hash::make('password123'),
            'created_at' => now(),
        ];
    }
}