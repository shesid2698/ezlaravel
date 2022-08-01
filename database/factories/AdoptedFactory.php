<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdoptedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adid' => 'mem_' . rand(1, 100),
            'adname' => $this->faker->name,
            'admoney' => rand(1, 100000),
            'remark' => $this->faker->realText,
        ];
    }
}