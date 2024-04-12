<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityCategoryVisibilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id'   =>  City::factory(),
            'category_id'    =>  Category::factory(),
            'visible'   =>  $this->faker->boolean(80)
        ];
    }
}
