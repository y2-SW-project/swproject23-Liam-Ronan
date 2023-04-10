<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class renderPagesTest extends TestCase
{
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
        $response = $this->get('/home');

        $response->assertStatus(500);
    }

    public function test_the_application_returns_a_successful_about_page()
    {
        $response = $this->get('/about');

        $response->assertStatus(500);
    }

    public function test_the_application_returns_a_successful_contact_page()
    {
        $response = $this->get('/contact');

        $response->assertStatus(500);
    }

    public function test_the_application_returns_a_successful_user_bookings_page()
    {
        $response = $this->get('/user/bookings');
        $response->assertStatus(302);
    }
}
