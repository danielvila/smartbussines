<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FinancialData>
 */
class FinancialDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' => 1,
            'credito' => true,
            'credito_limite' => $this->faker->numberBetween(500, 999),
            'credito_dias' => $this->faker->numberBetween(0, 30),
            'tolerancia' => true,
            'tolerancia_dias' => $this->faker->numberBetween(0, 5),
            'interes_mora' => true,
            'descuento' => $this->faker->numberBetween(0, 99),
        ];
    }
}
