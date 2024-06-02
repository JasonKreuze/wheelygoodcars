<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarTag>
 */
class CarTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_id' =>\App\Models\Tag::inRandomOrder()->first()->id,
            'car_id' =>\App\Models\Car::inRandomOrder()->first()->id,
        ];
    }
}
