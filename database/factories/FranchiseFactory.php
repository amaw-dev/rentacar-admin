<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Franchise>
 */
class FranchiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'  =>  $this->faker->word(),
            'reserva_button'    =>  $this->faker->url(),
            'masinfo_button'    =>  $this->faker->url(),
            'masprecios_button'    =>  $this->faker->url(),
            'url_mail_system'    =>  $this->faker->url(),
            'ad'    =>  [
                'activo'    =>  $this->faker->boolean(70),
                'imagen'    =>  $this->faker->url(),
                'url'    =>  $this->faker->url(),
            ],
            'carousel'  =>  [
                'imagen'    =>  $this->faker->url(),
                'imagen_movil'    =>  $this->faker->url(),
                'imagen_url'    =>  $this->faker->url(),
                'alt'    =>  $this->faker->word(),
                'activo'    =>  $this->faker->boolean(70),
            ]
        ];
    }
}
