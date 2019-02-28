<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        #$response->assertStatus(200);
        $response->assertStatus(302);
    }
    /*
    public function testIndex()
    {
      $this->visit("/tasks")->see("Task List");
    }
    */
}
