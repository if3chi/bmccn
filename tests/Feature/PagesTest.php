<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hompage_is_operating_normally()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_creative_writing_page_is_operating_normally()
    {
        $response = $this->get(route('creative-writing'));

        $response->assertSee('Submit Essay');
        $response->assertStatus(200);
    }

    public function test_kids_2_action_page_is_operating_normally()
    {
        $response = $this->get(route('kids2action'));

        $response->assertSee('KIDS2ACTION CAMPAIGN');
        $response->assertStatus(200);
    }
}
