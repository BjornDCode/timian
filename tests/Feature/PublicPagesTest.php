<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PublicPagesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_guest_can_view_the_front_page() {
        $this->assertTrue(true);
    }

    /** @test */
    public function an_authenticated_user_cannot_see_the_front_page() {

    }

}
