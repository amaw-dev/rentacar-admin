<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;


use Tests\TestCase;

use App\Models\Reservation;
use App\Enums\ReservationStatus;

use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

use Mockery;
use App\Facades\Wati;


class SendPostReservationPickupNotificationTest extends TestCase
{
    use RefreshDatabase;

    protected $today;
    protected $tomorrow;

    public function setUp(): void
    {
        parent::setUp();

        $this->today = now()->format('Y-m-d');
        $this->tomorrow = now()->addDay()->format('Y-m-d');

    }

    public function tearDown(): void
    {
        Mockery::close(); // Cierra los mocks de Mockery para evitar errores
        parent::tearDown();
    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function send_morning_post_reservation_pickup_notification(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);


        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->expectsOutput("Morning Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Morning Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function send_late_post_reservation_pickup_notification(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->expectsOutput("Late Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Late Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function when_morning_post_reservation_pickup_notification_add_contact_fail(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => false])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);


        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->expectsOutput("Morning Post Pickup Notification Error registering contact: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Morning Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Morning Post Pickup Notification sent: {$reservation->fullname} ({$reservation->phone})")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function when_late_post_reservation_pickup_notification_add_contact_fail(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => false])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->expectsOutput("Late Post Pickup Notification Error registering contact: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Late Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Late Post Pickup Notification sent: {$reservation->fullname} ({$reservation->phone})")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function when_morning_post_reservation_pickup_notification_send_template_fail(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => false]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->expectsOutput("Morning Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Morning Post Pickup Notification Error sending notification {$this->today}")
            ->doesntExpectOutput("Morning Post Pickup Notification sent: {$reservation->fullname} ({$reservation->phone})")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function when_late_post_reservation_pickup_notification_send_template_fail(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => false]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->expectsOutput("Late Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Late Post Pickup Notification Error sending notification {$this->today}")
            ->doesntExpectOutput("Late Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function in_morning_post_reservation_pickup_notification_only_send_it_once(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->expectsOutput("Morning Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Morning Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

        $this->travel(1)->days();

        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->doesntExpectOutput("Morning Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Morning Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function in_late_post_reservation_pickup_notification_only_send_it_once(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->expectsOutput("Late Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Late Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

        $this->travel(1)->days();

        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->doesntExpectOutput("Late Post Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Late Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function in_morning_post_reservation_pickup_notification_for_two_reservations(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->expectsOutput("Morning Post Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Morning Post Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Morning Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function in_late_post_reservation_pickup_notification_for_two_reservations(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->expectsOutput("Late Post Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Late Post Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Late Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function send_morning_post_reservation_pickup_notification_only_when_reserved_or_monthly_status(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Pendiente,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->doesntExpectOutput("Post Morning Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Post Morning Pickup Notification sent: {$reservation->fullname} ({$reservation->phone})")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function send_late_post_reservation_pickup_notification_only_when_reserved_or_monthly_status(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Pendiente,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->doesntExpectOutput("Post Late Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Post Late Pickup Notification sent: {$reservation->fullname} ({$reservation->phone})")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function in_morning_post_reservation_pickup_notification_if_one_reservation_fails_must_evaluate_others(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn([
                'result' => false
            ],
            [
                'result' => true
            ])
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->doesntExpectOutput("Morning Post Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Morning Post Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Morning Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function in_late_post_reservation_pickup_notification_if_one_reservation_fails_must_evaluate_others(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn([
                'result' => false
            ],
            [
                'result' => true
            ])
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->doesntExpectOutput("Late Post Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Late Post Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Late Post Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function dont_send_morning_post_reservation_pickup_notification_if_theres_no_reserve_code(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->subDay()->format('Y-m-d'),
            'pickup_hour' => '18:00',
            'status' => ReservationStatus::Reservado,
            'reserve_code' => null,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-morning-post-reservation-pickup-notification')
            ->doesntExpectOutput("Post Morning Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Post Morning Pickup Notification sent: {$reservation->fullname} ({$reservation->phone})")
            ->assertSuccessful();

    }

    #[Group("send-post-reservation-pickup-notification")]
    #[Test]
    public function dont_send_late_post_reservation_pickup_notification_if_theres_no_reserve_code(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
            'reserve_code' => null,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-late-post-reservation-pickup-notification')
            ->doesntExpectOutput("Post Late Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Post Late Pickup Notification sent: {$reservation->fullname} ({$reservation->phone})")
            ->assertSuccessful();

    }

}
