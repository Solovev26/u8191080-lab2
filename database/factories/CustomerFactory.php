<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'blocked'=> $this->faker->boolean(),
            'last_name'=> $this->faker->lastName(),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->safeEmail(),
            'created_at'=>$this->faker->dateTime
        ];
    }
}
