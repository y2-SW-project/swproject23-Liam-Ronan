<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 'secret12',
            'password_confirmation' => 'secret12'
        ];

        $response = $this->post('/register', $userData);

        $response->assertStatus(302);
        $this->assertDatabaseHas('users', ['email' => 'john.doe@example.com']);
        $response->assertRedirect('/home');
    }

    public function test_user_can_login()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password')
        ]);
    
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);
    
        $this->assertAuthenticated();
        $response->assertRedirect('/home');
    }

    public function test_user_with_incorrect_credentials_cannot_login() 
    {
        $user = User::factory()->create();
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'badpassword'
        ]);
        
        // $response->assertSessionHasErrors('email');
        // $response->assertSessionDoesntHaveErrors('password');
        $this->assertGuest();
    
    }

    public function test_user_can_logout()
    {

        $user = User::factory()->create();

        $this->actingAs($user);
    
        $response = $this->post('/logout');
    
        $this->assertGuest();
        $response->assertRedirect('/');
    }
    
}
