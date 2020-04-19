<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->post('/api/order', [
            "location" => 'asdadfe',
            "cost" => 205,
            "items" => [
                [
                    "quantity" => 3,
                    "notes" => 'asdaf iwejfiw f',
                    "meal_id" => 1
                ]
            ]
        ]);

        $response->assertStatus(200);

        $response = $this->get('/api/order');
        $response->assertStatus(200);
    }
}
