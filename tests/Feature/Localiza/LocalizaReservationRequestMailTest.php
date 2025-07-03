<?php

namespace Tests\Feature\Localiza;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

use App\Mail\ReservationRequest\LocalizaReservationRequest;
use App\Mail\ReservationRequest\AlquilatucarroReservationRequest;
use App\Mail\ReservationRequest\AlquilameReservationRequest;
use App\Mail\ReservationRequest\AlquicarrosReservationRequest;
use App\Models\Reservation;

class LocalizaReservationRequestMailTest extends TestCase
{
    use RefreshDatabase;

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function send_a_email_to_localiza_reservation_desk(): void {
        $reservation = Reservation::factory()->create();

        $mail = new LocalizaReservationRequest($reservation);
        $mail->assertSeeInHtml($reservation->fullname);
        $mail->assertSeeInHtml($reservation->identification_type);
        $mail->assertSeeInHtml($reservation->identification);
        $mail->assertSeeInHtml($reservation->phone);
        $mail->assertSeeInHtml($reservation->email);
        $mail->assertSeeInHtml($reservation->formatted_category);
        $mail->assertSeeInHtml($reservation->formatted_pickup_place);
        $mail->assertSeeInHtml($reservation->formatted_return_place);
        $mail->assertSeeInHtml($reservation->formatted_pickup_date);
        $mail->assertSeeInHtml($reservation->formatted_return_date);
        $mail->assertSeeInHtml($reservation->formatted_pickup_hour);
        $mail->assertSeeInHtml($reservation->formatted_return_hour);


        $mail->assertSeeInText($reservation->fullname);
        $mail->assertSeeInText($reservation->identification_type);
        $mail->assertSeeInText($reservation->identification);
        $mail->assertSeeInText($reservation->phone);
        $mail->assertSeeInText($reservation->email);
        $mail->assertSeeInText($reservation->formatted_category);
        $mail->assertSeeInText($reservation->formatted_pickup_place);
        $mail->assertSeeInText($reservation->formatted_return_place);
        $mail->assertSeeInText($reservation->formatted_pickup_date);
        $mail->assertSeeInText($reservation->formatted_return_date);
        $mail->assertSeeInText($reservation->formatted_pickup_hour);
        $mail->assertSeeInText($reservation->formatted_return_hour);

    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_from_alquilatucarro_and_check_data(): void {
        $reservation = Reservation::factory()->create();

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertSeeInHtml($reservation->fullname);
        $mail->assertSeeInHtml($reservation->identification_type);
        $mail->assertSeeInHtml($reservation->identification);
        $mail->assertSeeInHtml($reservation->phone);
        $mail->assertSeeInHtml($reservation->email);
        $mail->assertSeeInHtml($reservation->formatted_category);
        $mail->assertSeeInHtml($reservation->formatted_pickup_place);
        $mail->assertSeeInHtml($reservation->formatted_return_place);
        $mail->assertSeeInHtml($reservation->formatted_pickup_date);
        $mail->assertSeeInHtml($reservation->formatted_return_date);
        $mail->assertSeeInHtml($reservation->formatted_pickup_hour);
        $mail->assertSeeInHtml($reservation->formatted_return_hour);

        $mail->assertSeeInText($reservation->fullname);
        $mail->assertSeeInText($reservation->identification_type);
        $mail->assertSeeInText($reservation->identification);
        $mail->assertSeeInText($reservation->phone);
        $mail->assertSeeInText($reservation->email);
        $mail->assertSeeInText($reservation->formatted_category);
        $mail->assertSeeInText($reservation->formatted_pickup_place);
        $mail->assertSeeInText($reservation->formatted_return_place);
        $mail->assertSeeInText($reservation->formatted_pickup_date);
        $mail->assertSeeInText($reservation->formatted_return_date);
        $mail->assertSeeInText($reservation->formatted_pickup_hour);
        $mail->assertSeeInText($reservation->formatted_return_hour);

    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_from_alquilame_and_check_data(): void {
        $reservation = Reservation::factory()->create();

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertSeeInHtml($reservation->fullname);
        $mail->assertSeeInHtml($reservation->identification_type);
        $mail->assertSeeInHtml($reservation->identification);
        $mail->assertSeeInHtml($reservation->phone);
        $mail->assertSeeInHtml($reservation->email);
        $mail->assertSeeInHtml($reservation->formatted_category);
        $mail->assertSeeInHtml($reservation->formatted_pickup_place);
        $mail->assertSeeInHtml($reservation->formatted_return_place);
        $mail->assertSeeInHtml($reservation->formatted_pickup_date);
        $mail->assertSeeInHtml($reservation->formatted_return_date);
        $mail->assertSeeInHtml($reservation->formatted_pickup_hour);
        $mail->assertSeeInHtml($reservation->formatted_return_hour);

        $mail->assertSeeInText($reservation->fullname);
        $mail->assertSeeInText($reservation->identification_type);
        $mail->assertSeeInText($reservation->identification);
        $mail->assertSeeInText($reservation->phone);
        $mail->assertSeeInText($reservation->email);
        $mail->assertSeeInText($reservation->formatted_category);
        $mail->assertSeeInText($reservation->formatted_pickup_place);
        $mail->assertSeeInText($reservation->formatted_return_place);
        $mail->assertSeeInText($reservation->formatted_pickup_date);
        $mail->assertSeeInText($reservation->formatted_return_date);
        $mail->assertSeeInText($reservation->formatted_pickup_hour);
        $mail->assertSeeInText($reservation->formatted_return_hour);

    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_from_alquicarros_and_check_data(): void {
        $reservation = Reservation::factory()->create();

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertSeeInHtml($reservation->fullname);
        $mail->assertSeeInHtml($reservation->identification_type);
        $mail->assertSeeInHtml($reservation->identification);
        $mail->assertSeeInHtml($reservation->phone);
        $mail->assertSeeInHtml($reservation->email);
        $mail->assertSeeInHtml($reservation->formatted_category);
        $mail->assertSeeInHtml($reservation->formatted_pickup_place);
        $mail->assertSeeInHtml($reservation->formatted_return_place);
        $mail->assertSeeInHtml($reservation->formatted_pickup_date);
        $mail->assertSeeInHtml($reservation->formatted_return_date);
        $mail->assertSeeInHtml($reservation->formatted_pickup_hour);
        $mail->assertSeeInHtml($reservation->formatted_return_hour);

        $mail->assertSeeInText($reservation->fullname);
        $mail->assertSeeInText($reservation->identification_type);
        $mail->assertSeeInText($reservation->identification);
        $mail->assertSeeInText($reservation->phone);
        $mail->assertSeeInText($reservation->email);
        $mail->assertSeeInText($reservation->formatted_category);
        $mail->assertSeeInText($reservation->formatted_pickup_place);
        $mail->assertSeeInText($reservation->formatted_return_place);
        $mail->assertSeeInText($reservation->formatted_pickup_date);
        $mail->assertSeeInText($reservation->formatted_return_date);
        $mail->assertSeeInText($reservation->formatted_pickup_hour);
        $mail->assertSeeInText($reservation->formatted_return_hour);

    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_total_insurance(): void {
        $reservation = Reservation::factory()->create([
            'total_insurance' => true
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere seguro total");
        $mail->assertSeeInText("El cliente requiere seguro total");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere seguro total");
        $mail->assertSeeInText("El cliente requiere seguro total");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere seguro total");
        $mail->assertSeeInText("El cliente requiere seguro total");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_no_total_insurance(): void {
        $reservation = Reservation::factory()->create([
            'total_insurance' => false
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere seguro total");
        $mail->assertDontSeeInText("El cliente requiere seguro total");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere seguro total");
        $mail->assertDontSeeInText("El cliente requiere seguro total");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere seguro total");
        $mail->assertDontSeeInText("El cliente requiere seguro total");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_extra_driver(): void {
        $reservation = Reservation::factory()->create([
            'extra_driver' => true
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Conductor adicional");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Conductor adicional");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Conductor adicional");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Conductor adicional");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Conductor adicional");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Conductor adicional");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_no_extra_driver(): void {
        $reservation = Reservation::factory()->create([
            'extra_driver' => false
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Conductor adicional");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Conductor adicional");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Conductor adicional");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Conductor adicional");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Conductor adicional");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Conductor adicional");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_baby_seat(): void {
        $reservation = Reservation::factory()->create([
            'baby_seat' => true
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Silla para bebé");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Silla para bebé");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Silla para bebé");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Silla para bebé");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Silla para bebé");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Silla para bebé");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_no_baby_seat(): void {
        $reservation = Reservation::factory()->create([
            'baby_seat' => false
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Silla para bebé");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Silla para bebé");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Silla para bebé");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Silla para bebé");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Silla para bebé");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Silla para bebé");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_wash(): void {
        $reservation = Reservation::factory()->create([
            'wash' => true
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Lavado de vehículo");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Lavado de vehículo");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Lavado de vehículo");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Lavado de vehículo");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Lavado de vehículo");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Lavado de vehículo");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_no_wash(): void {
        $reservation = Reservation::factory()->create([
            'wash' => false
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Lavado de vehículo");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Lavado de vehículo");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Lavado de vehículo");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Lavado de vehículo");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertDontSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertDontSeeInHtml("Lavado de vehículo");
        $mail->assertDontSeeInText("El cliente requiere los servicios de:");
        $mail->assertDontSeeInText("Lavado de vehículo");
    }

    #[Group("localiza_reservation_request")]
    #[Group("localiza")]
    #[Test]
    public function render_email_where_theres_extra_driver_and_baby_seat_and_wash(): void {
        $reservation = Reservation::factory()->create([
            'extra_driver' => true,
            'baby_seat' => true,
            'wash' => true,
        ]);

        $mail = new AlquilatucarroReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Conductor adicional");
        $mail->assertSeeInHtml("Silla para bebé");
        $mail->assertSeeInHtml("Lavado de vehículo");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Conductor adicional");
        $mail->assertSeeInText("Silla para bebé");
        $mail->assertSeeInText("Lavado de vehículo");

        $mail = new AlquilameReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Conductor adicional");
        $mail->assertSeeInHtml("Silla para bebé");
        $mail->assertSeeInHtml("Lavado de vehículo");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Conductor adicional");
        $mail->assertSeeInText("Silla para bebé");
        $mail->assertSeeInText("Lavado de vehículo");

        $mail = new AlquicarrosReservationRequest($reservation);
        $mail->assertSeeInHtml("El cliente requiere los servicios de:");
        $mail->assertSeeInHtml("Conductor adicional");
        $mail->assertSeeInHtml("Silla para bebé");
        $mail->assertSeeInHtml("Lavado de vehículo");
        $mail->assertSeeInText("El cliente requiere los servicios de:");
        $mail->assertSeeInText("Conductor adicional");
        $mail->assertSeeInText("Silla para bebé");
        $mail->assertSeeInText("Lavado de vehículo");
    }
}
