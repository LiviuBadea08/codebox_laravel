<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventSubscriptionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_if_guest_cannot_subscribe() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $response = $this->get(route('subscribe', $event->id));

        $response->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function test_logged_user_can_subscribe_if_stock_is_avaliable_and_event_date_has_not_passed() {
        $this->withExceptionHandling();

        $user = User::factory()->create();
        $this->actingAs($user);

        $event = Event::factory()->create([
            'dateTime' => Carbon::now()->addDays(1),
            'stock' => 1
        ]);

        $response = $this->get(route('subscribe', $event->id));

        $this->assertEquals(1, $event->user()->count());
    }

    public function test_stock_decreases_when_user_subscribe_to_event() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $event->stock = 1;

        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $response = $this->get(route('subscribe', $event->id));

        $this->assertEquals($event->stock = 0, $event->stock);
    }

    public function test_user_cannot_subscribe_twice_to_the_same_event() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $event->stock = 2;

        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $response = $this->get(route('subscribe', $event->id));

        $response = $this->get(route('subscribe', $event->id));

        $this->assertEquals($event->stock = 1, $event->stock);
    }

    public function test_user_cannot_subscribe_to_event_with_stock_0() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();

        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $event->stock = 0;
        $event->save();

        $response = $this->get(route('subscribe', $event->id));

        $this->assertEquals(0, $event->user()->count());
    }

    public function test_logged_user_can_cancel_subscription() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();

        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $event->user()->attach($user);

        $response = $this->get(route('cancelSuscription', $event->id));

        $this->assertEquals(0, $event->user()->count());
    }

    public function test_if_user_cannot_subscribe_to_event_if_time_is_over() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $event->dateTime = Carbon::now()->subDays(-1);

        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $response = $this->get(route('subscribe', $event->id));

        $this->assertEquals(0, $event->user()->count());
    }


    /* 

    testear si el evento se muestra como finalizado si ha pasado la fecha

    testear que el evento se muestra como completo si no hay stock

    
    */

}
