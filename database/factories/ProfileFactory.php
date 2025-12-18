<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => $this->faker->numberBetween(1, 10),
            'bio' => $this->faker->paragraph(),
            'display_name' => $this->faker->name(),
            'handle' => $this->faker->unique()->userName(),
            'avatar_url' => $this->faker->imageUrl(90, 90, 'people', true),

        ];
    }
}
