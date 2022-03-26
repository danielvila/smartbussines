<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seller>
 */
class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->postcode(),
            'descripcion' => $this->faker->company(),
            'id_fiscal' => $this->faker->unique()->uuid(),
            'direcction' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'celular' => $this->faker->phoneNumber(),
            'activo' => true,
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
