<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Franchise;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFranchiseWhatsappLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id' => City::factory(),
            'franchise_id' => Franchise::factory(),
            'whatsapp_link' => $this->faker->url()
        ];
    }
}
