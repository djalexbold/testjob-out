<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Order;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_orders_are_listed_correctly(): void
    {
        $response = $this->getJson('/api/orders');

        $response->assertStatus(200);
    }
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
