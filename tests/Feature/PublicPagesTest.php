<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PublicPagesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_guest_can_view_the_front_page() {

        // // Given we have a user that is not signed in
        // $user = create('App\Models\User');
        //
        // // When they hit the front page
        // $response = $this->get('/');
        //
        // // They will see the page
        // $response->assertSee('Timian');

    }

    /** @test */
    public function an_authenticated_user_cannot_see_the_front_page() {

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
