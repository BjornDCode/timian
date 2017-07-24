<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PublicPagesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_guest_can_view_the_front_page() {
        $user = create('App\Models\User');

        $response = $this->get('/');

        $response->assertSee('Timian');
    }

    /** @test */
    public function an_authenticated_user_cannot_see_the_front_page() {

        // Given we have a user
        // And that user is signed in
        $this->signIn();
        // When they try to acces the front page
        $response = $this->get('/');
        // They should be redirected to the dashboard page
        $response->assertRedirect('/dashboard');

    }

    /** @test */
    public function a_guest_can_view_the_plans_page() {

    }

    /** @test */
    public function an_authenticated_user_cannot_see_the_plans_page() {

    }

    /** @test */
    public function the_plans_page_shows_the_plans() {

    }

}
