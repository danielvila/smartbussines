<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupplierFinancial>
 */
class SupplierFinancialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'supplier_id' => 1,
            'type_retencion' => $this->faker->randomElement([1, 2]),
            'retencion' => $this->faker->randomElement([true, false]),
            'retencion_iva' => $this->faker->numberBetween(500, 999),
            'credito_dias' => $this->faker->numberBetween(0, 30),
            'observaciones' => $this->faker->numberBetween(0, 99),
        ];
    }
}
