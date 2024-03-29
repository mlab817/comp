<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'logo' => $this->faker->imageUrl([100,100]),
            'website' => $this->faker->url,
        ];
    }
}
