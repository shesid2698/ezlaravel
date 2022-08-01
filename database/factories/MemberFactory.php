<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
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
            'password' => $this->faker->password,
            'username' => $this->faker->name,
            'adopt_id' => 'ani_' . rand(1, 100),
            'email' => $this->faker->email,
            'addr' => $this->faker->address,
        ];
    }
}
