<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;


class AuthTest extends TestCase
{
/** @test */


// log in user with valid credentials.
      public function user_can_login_with_valid_credentials()
   {
       $user = factory(User::class)->create();

       $response = $this->post('/login', [
           'email' => $user->email,
           'password' => $user->password
       ]);
        // $this->assertAuthenticatedAs($user, $guard = null);
       $response->assertStatus(302);


   }


   //An invalid user cannot be logged in.

      public function user_cannot_login_with_invalid_credentials()
      {
          $user = factory(User::class)->create();

            //$this->assertInvalidCredentials(array $credentials, $guard = null);
          $response = $this->post('/login', [
              'email' => $user->email,
              'password' => 'invalid'
          ]);

          $response->assertSessionHasErrors();


      }

    public function user_can_register_with_valid_credentials()
{
    $user = factory(User::class)->create();

    $response = $this->post('/register', [
        'name' => $user->name,
        'email' => $user->email,
        'password' => $user->password,
        'password_confirmation' => '$user->password_confirmation'
    ]);
    // $this->assertCredentials($response, $guard = 'auth.login');

    $response->assertStatus(302);
     // $this->seeIsAuthenticated();


    // $this->seeIsAuthenticated();
}

//user cannot be register again

    public function user_cannot_register_with_existing_credentials()
    {
        $user = factory(User::class)->make();

        $response = $this->post('register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'secret',
            'password_confirmation' => 'invalid'
        ]);

        $response->assertSessionHasErrors();
          $this->assertGuest($guard = null);
        // $this->dontSeeIsAuthenticated();
    }

//get password reset code with the email

public function user_can_request_for_reset_password_code()
{
   $user = factory(User::class)->create();

   $this->expectsNotification($user, ResetPassword::class);

   $response = $this->post('password/email', ['email' => $user->email]);

//confrim redirect
   $response->assertStatus(302);
}


//user can reset their password with email .

    public function user_can_reset_password_with_valid_code()
    {
        $user = factory(User::class)->create();

        $token = Password::createToken($user);

        $response = $this->post('/password/reset', [
            'token' => $token,
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => $user->password_confirmation
        ]);

        $this->assertTrue(Hash::check('password', $user->fresh()->password));
    }



}
