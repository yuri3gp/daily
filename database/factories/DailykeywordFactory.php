<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Daily;
use App\Models\Keyword;

class DailykeywordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "daily_id" => Daily::factory(),
            "keyword_id" => Keyword::factory()
        ];
    }
}
