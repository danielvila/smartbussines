<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->postcode(),
            'type' => 1,
            'description' => $this->faker->unique()->name(),
            'department_id' => 1,
            'group_id' => 1,
            'line_id' => 1,
            'trademark_id' => 1,
            'itbmssale_id' => 1,
            'itbmsbuy_id' => 1,
            'exent' => false,
            'use_packaging' => false,
            'product_with_lots' => false,
            'composite_product' => false,
            'product_with_serials' => false,
            'use_server' => false,
            'use_area_transactions' => false,
            'scale_prices' => false,
            'product_consignment' => false,
            'use_scale' => false,
            'active' => true,
            'ecommerce' => false,
        ];
    }
}
