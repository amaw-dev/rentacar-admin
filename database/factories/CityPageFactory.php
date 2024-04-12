<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CityPage>
 */
class CityPageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id'   =>  City::factory(),
            'franchise_id'   =>  Franchise::factory(),
            'url'       =>  $this->faker->url(),
        ];
    }
}
