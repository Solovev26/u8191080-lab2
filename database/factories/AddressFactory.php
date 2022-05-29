<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->firstName(),
            'city'=> $this->faker->city(),
            'street'=> $this->faker->streetName(),
            'home' => rand(1, 200),
            'floor' => rand(1,50),
            'flat' => rand(1, 200),
            'code'=> rand(10000, 99999),
            'customer_id' => Customer::query()->get()->random()->id,
            'added_at'=> $this->faker->dateTime(),
        ];
    }
}
