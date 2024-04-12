<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryModel>
 */
class CategoryModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'        =>  Category::factory(),
            'name'          =>  $this->faker->words(3, true),
            'description'   =>  $this->faker->words(3, true),
            'image'         =>  'carcategories/car.png',
            'default'       =>  false,
        ];
    }
}
