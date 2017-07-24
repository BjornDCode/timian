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
        $this->signIn();

        $response = $this->get('/');

        $response->assertRedirect('/dashboard');
    }

    /** @test */
    public function a_guest_can_view_the_plans_page() {
        $user = create('App\Models\User');
        $plan = create('App\Models\Plan');

        $response = $this->get('/plans');

        $response->assertSee($plan->name);
    }

    /** @test */
    public function an_authenticated_user_cannot_see_the_plans_page() {

        // Given we have an authenticade user
        $this->signIn();
        // When they try to see the plans page
        $response = $this->get('/plans');
        // They should be redirected to the dashboard page
        $response->assertRedirect('/dashboard');

    }

}
