<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Barber;
use Tests\TestCase;
use App\Models\User;
use App\Models\Services;
use Illuminate\Foundation\Testing\RefreshDatabase;

class renderPagesTest extends TestCase
{

    use RefreshDatabase;

    public function test_the_application_returns_a_successful_log_in_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_register_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_home_page()
    {

        // create a user and authenticate them
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_about_page()
    {

        // create a user and authenticate them
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_contact_page()
    {

        // create a user and authenticate them
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_service_details_page()
    {
        // Create a user
        $user = User::factory()->create();
    
        // Create a service
        $service = new Services();
        $service->haircut = 'fade';
        $service->description = 'standard';
        $service->price = '15.00';
        $service->duration = '30 mins';
        $service->save();
    
        $this->actingAs($user);
    
        // Attempt to access the service details page
        $response = $this->get('/services/' . $service->id);
        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_barber_details_page() {

        $user = User::factory()->create();
    
        // Create a barber
        $barber = Barber::factory()->create();

        $this->actingAs($user);

        // Attempt to access the barbers profile page
        $response = $this->get('/barbers/' . $barber->id);

        $response->assertStatus(200);
    }
}
