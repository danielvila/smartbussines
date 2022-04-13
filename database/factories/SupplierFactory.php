<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->postcode(),
            'tipo' => $this->faker->randomElement([1, 2]),
            'name' => $this->faker->company(),
            'ruc' => $this->faker->unique()->uuid(),
            'dv' => $this->faker->numberBetween(0, 99),
            'type_supplier' => $this->faker->randomElement([1, 2]),
            'representante' => $this->faker->name(),
            'direcction1' => $this->faker->address(),
            'direcction2' => $this->faker->address(),
            'pais' => 'Panama',
            'estado' => $this->faker->state(),
            'ciudad' => $this->faker->state(),
            'municipio' => $this->faker->city(),
            'telefono' => $this->faker->phoneNumber(),
            'celular' => $this->faker->phoneNumber(),
            'activo' => true,
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
