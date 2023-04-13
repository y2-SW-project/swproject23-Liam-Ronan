<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class userBookingsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_bookings_contains_empty_table()
    {
        $response = $this->get('/user/bookings');

        $response->assertStatus(200);
        $response->assertSee(value: 'No Appointments found Please make one below');
    }
}
