<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userid' => 'mem_' . rand(1, 100),
            'username' => $this->faker->name,
            'adid' => $this->faker->randomElement(['cat_', 'dog_', 'others_']) . rand(1, 100),
            'adoptname' => $this->faker->name,
            'adoptmoney' => rand(1, 100000),
            'remark' => $this->faker->text,
        ];
    }
}