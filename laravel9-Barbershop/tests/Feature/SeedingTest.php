<?php

use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use App\Models\Barber;
use App\Models\Booking;
use App\Models\Services;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeedingTest extends TestCase
{
    use RefreshDatabase;

    public function test_bookings_table_is_seeded_with_fake_data() {

        $this->seed();
        $bookings = Booking::all();

        $this->assertCount(12, $bookings);

        foreach ($bookings as $booking) {
            $this->assertNotNull($booking->barber_id);
            $this->assertNotNull($booking->services_id);
            $this->assertNotNull($booking->user_id);
            $this->assertNotNull($booking->date);
            $this->assertNotNull($booking->time);
        }
    }

    public function test_barbers_table_is_seeded_with_fake_data() {
        
        $this->seed();
        $barbers = Barber::all();

        $this->assertCount(4, $barbers);

        foreach ($barbers as $barber) {
            $this->assertNotNull($barber->name);
            $this->assertNotNull($barber->bio);
            $this->assertNotNull($barber->email);
            $this->assertNotNull($barber->phone_number);
        }
    }

    public function test_services_table_is_seeded_with_fake_data() {
        
        $this->seed();
        $services = Services::all();

        $this->assertCount(8, $services);

        foreach ($services as $service) {
            $this->assertNotNull($service->haircut);
            $this->assertNotNull($service->description);
            $this->assertNotNull($service->price);
            $this->assertNotNull($service->duration);
        }
    }

    public function test_roles_table_is_seeded() {
        
        $this->seed();
        $roles = Role::all();

        $this->assertCount(2, $roles);

        foreach ($roles as $role) {
            $this->assertNotNull($role->name);
            $this->assertNotNull($role->description);
        }
    }

    public function test_users_table_is_seeded() {
        
        $this->seed();
        $users = User::all();

        $this->assertCount(2, $users);

        foreach ($users as $user) {
            $this->assertNotNull($user->name);
            $this->assertNotNull($user->email);
        }
    }
}
