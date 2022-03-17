<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OtherData>
 */
class OtherDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $client_id = $this->faker->unique()->numberBetween(1, 50);
        $client_cxc = $this->faker->numberBetween(1, 50);
        if($client_id == $client_cxc){
            if($client_cxc < 50){
                $client_cxc++;
            }else{
                $client_cxc--;
            }
        }
        return [
            'client_id' => $client_id,
            'zone' => $this->faker->numberBetween(1, 99),
            'user_id' => $this->faker->numberBetween(2, 11),
            'client_cxc' => $client_cxc,
            'type_client' => $this->faker->numberBetween(1, 3),
            'type_price' => $this->faker->numberBetween(1, 6),
        ];
    }
}
