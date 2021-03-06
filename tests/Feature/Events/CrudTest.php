<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_view_elcome_is_ok(){
        $this -> withoutExceptionHandling();

        $response = $this -> get('/');

        $response -> assertStatus(200)
                    -> assertViewIs('welcome');
    }

    public function test_event_list_appear_in_home(){
        $this -> withoutExceptionHandling();

        Event::all();

        $response = $this -> get('/home');

        $response -> assertStatus(200)
                    -> assertViewIs('home');
    }

    public function test_if_fetaured_event_appear_in_home(){
        $this -> withoutExceptionHandling();

        $event = Event::factory()->create(['featured' => 1]);

        $response = $this -> get('/home');

        $response -> assertStatus(200)
                    -> assertSee($event->featured);
    }



    public function test_an_event_can_be_deleted() {
        $this -> withoutExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);

        $event = Event::factory()->create();
        $this -> assertCount(1, Event::all());

        $this -> delete(route('delete', $event -> id));
        $this -> assertCount(0, Event::all());
    }

    public function test_an_event_cannot_be_deleted_by_a_non_admin() {
        $this -> withoutExceptionHandling();

        $user1 = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($user1);

        $event = Event::factory()->create();
        $this -> assertCount(1, Event::all());

        $this -> delete(route('delete', $event -> id));
        $this -> assertCount(1, Event::all());
    }



    public function test_an_event_can_be_updated() {
        $this -> withoutExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);

        $event = Event::factory()->create(['name' => 'name']);
        $this -> assertCount(1, Event::all());

        $this -> patch(route('update', $event -> id), ['name' => 'New Name',]);
        $this -> assertEquals(Event::first() -> name, 'New Name', );
    }

    public function test_an_event_cannot_be_updated_by_a_non_admin() {
        $this -> withoutExceptionHandling();

        $user1 = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($user1);

        $event = Event::factory()->create(['name' => 'name']);
        $this -> assertCount(1, Event::all());

        $this -> patch(route('update', $event -> id), ['name' => 'New Name',]);
        $this -> assertEquals(Event::first() -> name, 'name', );
    }



    public function test_if_view_edit_is_displayed_correctly() {
        $this -> withoutExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);

        $event = Event::factory()->create();
        $this -> assertCount(1, Event::all());

        $response = $this -> get(route('edit', $event -> id));
        $response -> assertStatus(200)
                    -> assertViewIs('edit');
    }
    
    public function test_if_view_edit_cannot_be_displayed_by_a_non_admin() {
        $this -> withoutExceptionHandling();

        $user1 = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($user1);

        $event = Event::factory()->create();
        $this -> assertCount(1, Event::all());

        $response = $this -> get(route('edit', $event -> id));
        $response -> assertStatus(302)
                    -> assertRedirect('/home');
    }



    public function test_an_event_can_be_created() {
        $this -> withoutExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);

        $this -> post(route('store'), [
            'name' => 'New Event',
            'description' => 'New Description',
            'date' => '2020-01-01',
            'time' => '12:00:00',
            'image' => 'New Image',
            'price' => 'New Price',
            'stock' => 'New Stock',
            'capacity' => 'New Capacity',
            'featured' => 'New Featured', 
            'finished' => 'New Finished', 
            'full' => 'New Full', 
        ]);
        $this -> assertCount(1, Event::all());

    }
    
    public function test_an_event_cannot_be_created_by_a_non_admin() {
        $this -> withoutExceptionHandling();

        $user1 = User::factory()->create(['isAdmin' => false]);
        $this -> actingAs($user1);

        $this -> post(route('store'), [
            'name' => 'New Event',
            'description' => 'New Description',
            'date' => '2020-01-01',
            'time' => '12:00:00',
            'image' => 'New Image',
            'price' => 'Nwe Price',
            'capacity' => 'New Capacity',
            'featured' => 'New Featured',
        ]);
        $this -> assertCount(0, Event::all());
    }



    public function test_create_view_is_displayed_correctly() {
        $this -> withoutExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this -> actingAs($userAdmin);

        $response = $this -> get(route('create'));
        $response -> assertStatus(200)
                    -> assertViewIs('create');
    }

    public function test_if_view_create_cannot_be_displayed_by_a_non_admin() {
        $this -> withoutExceptionHandling();

        $user1 = User::factory()->create(['isAdmin' => false]);
        $this -> actingAs($user1);

        $response = $this -> get(route('create'));
        $response -> assertStatus(302)
                    -> assertRedirect('/home');
    }


    
    public function test_view_show_is_ok(){
        $this -> withExceptionHandling();

        $event = Event::factory()->create();

        $response = $this->get(route('show', $event->id));
        $response -> assertStatus(200)
                ->assertSee($event -> title);
    }
}

