<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $min = $this->faker->numberBetween(1, 99);
        return [
            'quantity' => $this->faker->numberBetween(1, 99),
            'min' => $min,
            'max' => $min + 80,
            'product_id' => $this->faker->numberBetween(1, 99),
            'storage_id' => $this->faker->numberBetween(1, 5),
            'shelve_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
