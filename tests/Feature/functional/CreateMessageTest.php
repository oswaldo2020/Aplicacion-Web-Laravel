<?php

namespace Tests\Feature\functional;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateMessageTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;
    /** @test */

    public function a_user_can_send_messages()
    {
        $this->withoutEvents();
        $this->visit('mensajes/create');
        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
