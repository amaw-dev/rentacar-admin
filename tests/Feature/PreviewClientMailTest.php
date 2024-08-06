<?php

namespace Tests\Feature;

use App\Enums\IdentificationType;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Branch;
use App\Models\City;
use Tests\TestCase;

class PreviewClientMailTest extends TestCase
{
    use RefreshDatabase;

    public $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        session()->flush();

    }

    #[Group("preview_client_mail")]
    #[Test]
    public function check_data_is_rendered(): void
    {
        $category = Category::factory()->hasModels(2)->create([
            'name'  => 'Gama C',
            'category'  => 'Sedán automático',
            'description'  => '3 puertas',
        ]);

        $city = City::factory()->create([
            'name'  => "Cali",
        ]);

        $pickup_branch = Branch::factory()->create([
            'name' => 'Cali Aeropuerto',
            'city_id'   => $city->id
        ]);

        $date = now()->addDay();
        $pickup_date = $date->format('Y-m-d');
        $pickup_date_output = $date->isoFormat('LL');
        $pickup_hour = '9:00';

        $reservation = Reservation::factory()->create([
            'category' => $category->id,
            'identification_type' => IdentificationType::CedulaExtranjeria->value,
            'identification' => '11111',
            'fullname'  => 'John Doe',
            'reserve_code'  => 'AV-1',
            'pickup_location'   =>  $pickup_branch->id,
            'pickup_date'   =>  $pickup_date,
            'pickup_hour'   =>  $pickup_hour,
        ]);

        $response = $this
        ->actingAs($this->user)
        ->get(route('reservations.emailPreview', [
            'reservation' => $reservation
        ]))
        ->assertInertia(fn(Assert $page) => $page
            ->component('Reservations/EmailPreview')
            ->has('reservation', fn(Assert $page) => $page
                ->where('fullname', 'John Doe')
                ->where('identification_type', 'C.E.')
                ->where('identification', '11111')
                ->where('reserve_code', 'AV-1')
                ->where('category_name', 'Gama C')
                ->where('category_category', 'Sedán automático')
                ->where('category_description', '3 puertas')
                ->where('category_image', 'http://localhost:8000/storage/carcategories/car.png')
                ->where('pickup_branch', 'Cali Aeropuerto')
                ->where('pickup_city', 'Cali')
                ->where('pickup_date', $pickup_date_output)
                ->where('pickup_hour', '09:00 am')
            )
        );


    }
}
