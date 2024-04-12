<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\View;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LogVehAvailableRatesQuery>
 */
class LogVehAvailableRatesQueryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $xml = (View::make('localiza.tests.responses.vehavailrate.vehavailrate-xml'))->render();

        return [
            "request_parameters" => json_encode([
                "pickupLocation" => $this->faker->word(5),
                "returnLocation" => $this->faker->word(5),
                "pickupDate" => $this->faker->date(),
                "pickupHour" => $this->faker->date("HH:mm"),
                "returnDate" => $this->faker->date(),
                "returnHour" => $this->faker->date("HH:mm"),
            ]),
            "response_status"   => 200,
            "response_raw"      => $xml,
            "processed_data"          => json_encode([]),
            "source_ip" => $this->faker->ipv4(),
        ];
    }
}
