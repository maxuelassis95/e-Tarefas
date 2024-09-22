<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    
    protected $table = Profile::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'image' => fake()->imageUrl(),
        ];
    }
}
