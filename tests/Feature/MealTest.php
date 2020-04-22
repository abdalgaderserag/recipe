<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MealTest extends TestCase
{
    use WithFaker, RefreshDatabase;

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

        $meal = [
            "title" => $this->faker->title,
            "price" => (rand(10, 230) * 100) + 50,
            "describe" => $this->faker->paragraph,
            "image" => '',
            "_token" => '',
        ];
        $response = $this->post('/menu', $meal);

        $response->assertStatus(302);

        $response = $this->get('/menu/1');

        $response->assertStatus(200);

//        $response = $this->get('/menu/1/edit');

//        $response->assertStatus(200);

    }
}
