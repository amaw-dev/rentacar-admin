<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

use App\Facades\Wati;
use App\Models\Reservation;
use App\Enums\ReservationStatus;

use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Support\Facades\Http;


class SendReservationPickupNotificationTest extends TestCase
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

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function send_reservation_pickup_notification_same_day_morning_of_pickup(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->expectsOutput("Same Day Morning Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Same Day Morning Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function send_reservation_pickup_notification_same_day_late_of_pickup(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
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
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->expectsOutput("Same Day Late Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Same Day Late Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function send_reservation_pickup_notification_three_days_before_pickup(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '10:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->expectsOutput("Three Days Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Three Days Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function send_reservation_pickup_notification_a_week_before_pickup(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '10:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->expectsOutput("Week Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Week Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_morning_notification_when_add_contact_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->expectsOutput("Same Day Morning Pickup Notification Error registering contact: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Same Day Morning Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Same Day Morning Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_late_notification_when_add_contact_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->expectsOutput("Same Day Late Pickup Notification Error registering contact: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Same Day Late Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Same Day Late Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_three_days_notification_when_add_contact_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->expectsOutput("Three Days Pickup Notification Error registering contact: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Three Days Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Three Days Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_week_notification_when_add_contact_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->expectsOutput("Week Pickup Notification Error registering contact: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Week Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Week Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_morning_when_send_template_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->expectsOutput("Same Day Morning Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Same Day Morning Pickup Notification Error sending notification {$this->today}")
            ->doesntExpectOutput("Same Day Morning Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_late_when_send_template_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->expectsOutput("Same Day Late Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Same Day Late Pickup Notification Error sending notification {$this->today}")
            ->doesntExpectOutput("Same Day Late Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_three_days_when_send_template_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->expectsOutput("Three Days Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Three Days Pickup Notification Error sending notification {$this->today}")
            ->doesntExpectOutput("Three Days Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_week_when_send_template_failed_must_exit_command(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => false])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->expectsOutput("Week Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Week Pickup Notification Error sending notification {$this->today}")
            ->doesntExpectOutput("Week Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_morning_notification_only_send_reservation_pickup_notification_once(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->once();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->expectsOutput("Same Day Morning Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Same Day Morning Pickup Notification sent {$this->today}")
            ->assertSuccessful();

        $this->travel(1)->days();

        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->doesntExpectOutput("Same Day Morning Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Same Day Morning Pickup Notification sent {$this->tomorrow}")
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_late_notification_only_send_reservation_pickup_notification_once(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
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
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->expectsOutput("Same Day Late Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Same Day Late Pickup Notification sent {$this->today}")
            ->assertSuccessful();

        $this->travel(1)->days();

        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->doesntExpectOutput("Same Day Late Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Same Day Late Pickup Notification sent {$this->tomorrow}")
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_three_days_notification_only_send_reservation_pickup_notification_once(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
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
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->expectsOutput("Three Days Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Three Days Pickup Notification sent {$this->today}")
            ->assertSuccessful();

        $this->travel(1)->days();

        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->doesntExpectOutput("Three Days Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Three Days Pickup Notification sent {$this->tomorrow}")
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_week_notification_only_send_reservation_pickup_notification_once(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
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
        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->expectsOutput("Week Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->expectsOutput("Week Pickup Notification sent {$this->today}")
            ->assertSuccessful();

        $this->travel(1)->days();

        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->doesntExpectOutput("Week Pickup Notification Contact registered: {$reservation->fullname} ({$reservation->phone})")
            ->doesntExpectOutput("Week Pickup Notification sent {$this->today}")
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_morning_notification_send_reservation_pickup_notification_for_two_reservations(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true])
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->expectsOutput("Same Day Morning Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Same Day Morning Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Same Day Morning Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_late_notification_send_reservation_pickup_notification_for_two_reservations(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
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
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->expectsOutput("Same Day Late Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Same Day Late Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Same Day Late Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_three_days_notification_send_reservation_pickup_notification_for_two_reservations(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
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
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->expectsOutput("Three Days Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Three Days Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Three Days Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_week_notification_send_reservation_pickup_notification_for_two_reservations(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
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
        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->expectsOutput("Week Pickup Notification Contact registered: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Week Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Week Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_morning_notification_only_send_reservation_pickup_notification_if_reservation_status_is_reserved(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Pendiente,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_late_notification_only_send_reservation_pickup_notification_if_reservation_status_is_reserved(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Pendiente,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_three_days_notification_only_send_reservation_pickup_notification_if_reservation_status_is_reserved(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Pendiente,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_week_notification_only_send_reservation_pickup_notification_if_reservation_status_is_reserved(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Pendiente,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_morning_notification_if_one_reservation_fail_must_evaluate_others(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(
            ['result' => false],
            ['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->expectsOutput("Same Day Morning Pickup Notification Error registering contact: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Same Day Morning Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Same Day Morning Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_late_notification_if_one_reservation_fail_must_evaluate_others(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(
            ['result' => false],
            ['result' => true])
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->expectsOutput("Same Day Late Pickup Notification Error registering contact: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Same Day Late Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Same Day Late Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_three_days_notification_if_one_reservation_fail_must_evaluate_others(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(
            ['result' => false],
            ['result' => true]
            )
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->expectsOutput("Three Days Pickup Notification Error registering contact: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Three Days Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Three Days Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_week_notification_if_one_reservation_fail_must_evaluate_others(): void
    {
        $reservation1 = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        $reservation2 = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(
            ['result' => false],
            ['result' => true]
            )
            ->twice();

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true])
            ->once();

        // Act: Call the command to send the notification
        $this->artisan('wati:send-week-reservation-pickup-notification')
            ->expectsOutput("Week Pickup Notification Error registering contact: {$reservation1->fullname} ({$reservation1->phone})")
            ->expectsOutput("Week Pickup Notification Contact registered: {$reservation2->fullname} ({$reservation2->phone})")
            ->expectsOutput("Week Pickup Notification sent {$this->today}")
            ->assertSuccessful();

    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_morning_notification_only_send_reservation_pickup_notification_if_theres_reservation_code(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->format('Y-m-d'),
            'pickup_hour' => '16:00',
            'status' => ReservationStatus::Reservado,
            'reserve_code' => null,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-morning-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_same_day_late_notification_only_send_reservation_pickup_notification_if_theres_reservation_code(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDay()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
            'reserve_code' => null,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-same-day-late-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_three_days_notification_only_send_reservation_pickup_notification_if_theres_reservation_code(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addDays(3)->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
            'reserve_code' => null,
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
        $this->artisan('wati:send-three-days-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }

    #[Group("send-reservation-pickup-notification")]
    #[Test]
    public function in_week_notification_only_send_reservation_pickup_notification_if_theres_reservation_code(): void
    {
        $reservation = Reservation::factory()->create([
            'pickup_date' => now()->addWeek()->format('Y-m-d'),
            'pickup_hour' => '08:00',
            'status' => ReservationStatus::Reservado,
            'reserve_code' => 'abc123',
        ]);

        Wati::shouldReceive('addContact')
            ->andReturn(['result' => true]);

        Wati::shouldReceive('sendTemplateMessages')
            ->andReturn(['result' => true]);

        // Act: Call the command to send the notification
         $this->artisan('wati:send-week-reservation-pickup-notification')
            ->doesntExpectOutput()
            ->assertSuccessful();
    }
}
