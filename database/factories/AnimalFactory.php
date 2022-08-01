<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anid' => $this->faker->randomElement(['cat_', 'dog_', 'others_']) . rand(1, 100),
            'aniname' => $this->faker->name('可愛'),
            'category' => $this->faker->randomElement(['cat', 'dog', 'others']),
            'adoptmember' => $this->faker->name,
            'remark' => $this->faker->text,
        ];
    }
}