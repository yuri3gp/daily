<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Daily;

class DesignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "design" => base64_encode($this->faker->word()),
            "daily_id" => Daily::factory()
        ];
    }
}
