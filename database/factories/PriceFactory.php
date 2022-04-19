<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $min = 0;
        $max = 1000;
        $decimals = 4;
        return [
            'price' => $this->faker->randomFloat($decimals, $min, $max),
            'product_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
