<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_list_event_appear_in_home()
    {
        $this -> withoutExceptionHandling();
        Event::all();
        $response = $this -> get('/');
        $response -> assertStatus(200)
                    -> assertViewIs('home');

        
    }

    public function test_a_product_can_be_deleted() {
        $this -> withoutExceptionHandling();

        $event = Event::factory()->create();
        $this -> assertCount(1, Event::all());

        $this -> delete(route('delete', $event -> id));
        $this -> assertCount(0, Event::all());
    }

    public function test_a_product_can_be_updated() {
        $this -> withoutExceptionHandling();

        $event = Event::factory()->create();
        $this -> assertCount(1, Event::all());

        $this -> patch(route('update', $event -> id), ['name' => 'New Name',]);
        $this -> assertEquals(Event::first() -> name, 'New Name', );
    }
}
