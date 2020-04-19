<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MealTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/menu');

        $response->assertStatus(200);

        $response = $this->get('/menu/create');

        $response->assertStatus(200);

        $response = $this->post('/menu', [
            "title" => 'asdadfe',
            "price" => 205,
            "describe" => 'asd aadskjals j ladsjk',
            "image" => '',
            "_token" => '',
        ]);

        $response->assertStatus(302);

        $response = $this->get('/menu/1');

        $response->assertStatus(200);

//        $response = $this->get('/menu/1/edit');

//        $response->assertStatus(200);

    }
}
