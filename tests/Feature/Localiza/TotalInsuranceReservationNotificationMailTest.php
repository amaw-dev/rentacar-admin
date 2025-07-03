<?php

namespace Tests\Feature\Localiza;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

use App\Mail\ReservationTotalInsuranceNotification\AlquilatucarroReservationTotalInsuranceNotification;
use App\Mail\ReservationTotalInsuranceNotification\AlquilameReservationTotalInsuranceNotification;
use App\Mail\ReservationTotalInsuranceNotification\AlquicarrosReservationTotalInsuranceNotification;
use App\Mail\ReservationTotalInsuranceNotification\ReservationTotalInsuranceNotification;

use App\Enums\ReservationStatus;
use App\Models\Reservation;
use App\Models\Branch;
use App\Models\Franchise;
use App\Models\Category;

class TotalInsuranceReservationNotificationMailTest extends TestCase
{
    use RefreshDatabase;

    #[Group("total_insurance_reservation_notification")]
    #[Test]
    public function mention_when_a_total_insurance_reservation(): void {
        $reservation = Reservation::factory()->create([
            'total_insurance' => true
        ]);

        $total_insurance_message = "El cliente requiere seguro total";

        $mail = new ReservationTotalInsuranceNotification($reservation);
        $mail->assertSeeInHtml($total_insurance_message);
        $mail->assertSeeInText($total_insurance_message);
    }

    #[Group("total_insurance_reservation_notification")]
    #[Test]
    public function mention_when_a_total_insurance_reservation_has_total_insurance_by_alquilatucarro(): void {
        $reservation = Reservation::factory()->create([
            'total_insurance' => true
        ]);

        $total_insurance_message = "El cliente requiere seguro total";

        $mail = new AlquilatucarroReservationTotalInsuranceNotification($reservation);
        $mail->assertSeeInHtml($total_insurance_message);
        $mail->assertSeeInText($total_insurance_message);
    }

    #[Group("total_insurance_reservation_notification")]
    #[Test]
    public function mention_when_a_total_insurance_reservation_has_total_insurance_by_alquilame(): void {
        $reservation = Reservation::factory()->create([
            'total_insurance' => true
        ]);

        $total_insurance_message = "El cliente requiere seguro total";

        $mail = new AlquilameReservationTotalInsuranceNotification($reservation);
        $mail->assertSeeInHtml($total_insurance_message);
        $mail->assertSeeInText($total_insurance_message);
    }

    #[Group("total_insurance_reservation_notification")]
    #[Test]
    public function mention_when_a_total_insurance_reservation_has_total_insurance_by_alquicarros(): void {
        $reservation = Reservation::factory()->create([
            'total_insurance' => true
        ]);

        $total_insurance_message = "El cliente requiere seguro total";

        $mail = new AlquicarrosReservationTotalInsuranceNotification($reservation);
        $mail->assertSeeInHtml($total_insurance_message);
        $mail->assertSeeInText($total_insurance_message);
    }

    #[Group("total_insurance_reservation_notification")]
    #[Test]
    public function mention_when_a_total_insurance_reservation_has_extra_services_by_alquilatucarros(): void {
        $reservation = Reservation::factory()->create([
            'extra_driver' => true,
            'baby_seat' => true,
            'wash' => true,
        ]);

        $extra_services_text = "El cliente requiere los servicios de:";
        $extra_driver_text = "Conductor adicional";
        $baby_seat_text = "Silla para bebé";
        $wash_text = "Lavado de vehículo";

        $mail = new AlquilatucarroReservationTotalInsuranceNotification($reservation);
        $mail->assertSeeInHtml($extra_services_text);
        $mail->assertSeeInText($extra_services_text);
        $mail->assertSeeInHtml($extra_driver_text);
        $mail->assertSeeInText($extra_driver_text);
        $mail->assertSeeInHtml($baby_seat_text);
        $mail->assertSeeInText($baby_seat_text);
        $mail->assertSeeInHtml($wash_text);
        $mail->assertSeeInText($wash_text);
    }

    #[Group("total_insurance_reservation_notification")]
    #[Test]
    public function mention_when_a_total_insurance_reservation_has_extra_services_by_alquilame(): void {
        $reservation = Reservation::factory()->create([
            'extra_driver' => true,
            'baby_seat' => true,
            'wash' => true,
        ]);

        $extra_services_text = "El cliente requiere los servicios de:";
        $extra_driver_text = "Conductor adicional";
        $baby_seat_text = "Silla para bebé";
        $wash_text = "Lavado de vehículo";

        $mail = new AlquilameReservationTotalInsuranceNotification($reservation);
        $mail->assertSeeInHtml($extra_services_text);
        $mail->assertSeeInText($extra_services_text);
        $mail->assertSeeInHtml($extra_driver_text);
        $mail->assertSeeInText($extra_driver_text);
        $mail->assertSeeInHtml($baby_seat_text);
        $mail->assertSeeInText($baby_seat_text);
        $mail->assertSeeInHtml($wash_text);
        $mail->assertSeeInText($wash_text);
    }

    #[Group("total_insurance_reservation_notification")]
    #[Test]
    public function mention_when_a_total_insurance_reservation_has_extra_services_by_alquicarros(): void {
        $reservation = Reservation::factory()->create([
            'extra_driver' => true,
            'baby_seat' => true,
            'wash' => true,
        ]);

        $extra_services_text = "El cliente requiere los servicios de:";
        $extra_driver_text = "Conductor adicional";
        $baby_seat_text = "Silla para bebé";
        $wash_text = "Lavado de vehículo";

        $mail = new AlquicarrosReservationTotalInsuranceNotification($reservation);
        $mail->assertSeeInHtml($extra_services_text);
        $mail->assertSeeInText($extra_services_text);
        $mail->assertSeeInHtml($extra_driver_text);
        $mail->assertSeeInText($extra_driver_text);
        $mail->assertSeeInHtml($baby_seat_text);
        $mail->assertSeeInText($baby_seat_text);
        $mail->assertSeeInHtml($wash_text);
        $mail->assertSeeInText($wash_text);
    }

}
