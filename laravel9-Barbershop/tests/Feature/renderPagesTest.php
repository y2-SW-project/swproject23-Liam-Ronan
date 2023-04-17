<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
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
}
