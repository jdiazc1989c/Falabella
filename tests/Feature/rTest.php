<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Falabella extends TestCase
{
    /** @test */
    public function testFalabella()
    {
        $response = $this->get('/prueba');

        $response->assertStatus(200);
    }
}
