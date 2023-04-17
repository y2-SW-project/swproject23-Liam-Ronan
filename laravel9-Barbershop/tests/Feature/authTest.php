<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class authTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use WithFaker;
    public function test_user_create_account()
    {
        $response = $this->post('/register', [
            'name' => 'userOne',
            'email' => $this->faker->safeEmail(),
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);
        
        $this->assertAuthenticated();
        $response->assertRedirect('/home');
    }
}
