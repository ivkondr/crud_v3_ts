<?php

namespace Tests\Feature;

 use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_root_route()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_test_route()
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
    }
}
