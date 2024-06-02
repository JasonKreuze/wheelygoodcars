<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    private function plateGenerator()
    {
        $ranNum = rand(1, 12);
        if ($ranNum === 1){
            return fake()->regexify('[A-Z]{1}-[0-9]{3}-[A-Z]{2}');
        } elseif ($ranNum === 2) {
            return fake()->regexify('[0-9]{1}-[A-Z]{3}-[0-9]{2}');
        } elseif ($ranNum === 3) {
            return fake()->regexify('[A-Z]{2}-[0-9]{3}-[A-Z]{1}');
        } elseif ($ranNum === 4) {
            return fake()->regexify('[0-9]{2}-[A-Z]{3}-[0-9]{1}');
        } elseif ($ranNum === 5) {
            return fake()->regexify('[A-Z]{2}-[A-Z]{2}-[0-9]{2}');
        } elseif ($ranNum === 6) {
            return fake()->regexify('[A-Z]{2}-[0-9]{2}-[A-Z]{2}');
        } elseif ($ranNum === 7) {
            return fake()->regexify('[0-9]{2}-[A-Z]{2}-[A-Z]{2}');
        } elseif ($ranNum === 8) {
            return fake()->regexify('[0-9]{2}-[0-9]{2}-[A-Z]{2}');
        } elseif ($ranNum === 9) {
            return fake()->regexify('[0-9]{2}-[A-Z]{2}-[0-9]{2}');
        } elseif ($ranNum === 10) {
            return fake()->regexify('[A-Z]{2}-[0-9]{2}-[0-9]{2}');
        } elseif ($ranNum === 11) {
            return fake()->regexify('[0-9]{2}-[0-9]{2}-[0-9]{2}');
        } elseif ($ranNum === 12) {
            return fake()->regexify('[A-Z]{2}-[A-Z]{2}-[A-Z]{2}');
        }
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>\App\Models\User::inRandomOrder()->first()->id,
            'license_plate' => $this->plateGenerator(),
            'make' => fake()->name(),
            'model' => fake()->name(),
            'price' => rand(10, 1000000),
            'mileage' => rand(0, 999999),
            'seats' =>  rand(1, 7),
            'doors' => rand(1, 4),
            'production_year' => fake()->year('now'),
            'weight' => rand(100, 500),
            'color' => fake()->colorName,
        ];
    }
}
