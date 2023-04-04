<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;


class LoginTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test login with correct username and password
     */
    public function testLogin()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => $user->username,
            'password' => 'password',
        ]);
        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();
       

    }
    /**
     * @test login with wrong password 
     */
    public function testLoginWithWrongPassword()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => $user->username,
            'password' => 'wrong-password',
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with wrong username
     */
    public function testLoginWithWrongUsername()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => 'wrong-username',
            'password' => 'password',
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with wrong username and password
     */
    public function testLoginWithWrongUsernameAndPassword()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => 'wrong-username',
            'password' => 'wrong-password',
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with empty username and password
     */
    public function testLoginWithEmptyUsernameAndPassword()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => '',
            'password' => '',
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with empty username
     */
    public function testLoginWithEmptyUsername()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => '',
            'password' => 'password',
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with empty password
     */
    public function testLoginWithEmptyPassword()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => $user->username,
            'password' => '',
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with null username and password
     */
    public function testLoginWithNullUsernameAndPassword()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => null,
            'password' => null,
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with null username
     */
    public function testLoginWithNullUsername()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => null,
            'password' => 'password',
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
    /**
     * @test login with null password
     */
    public function testLoginWithNullPassword()
    {
        $user = User::factory()->create();
        $response = $this->post('/login/authenticate', [
            'username' => $user->username,
            'password' => null,
        ]);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
   
}
