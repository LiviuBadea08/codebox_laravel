<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
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

    public function test_if_non_user_can_subscribe() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $response = $this->get(route('subscribe', $event->id));

        $response->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function test_loged_user_can_subscribe() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();

        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $response = $this->get(route('subscribe', $event->id));

        $this->assertEquals($user->id, $event->user[0]->id);
    }

    public function test_loged_user_can_cancel_subscription() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();

        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $event->user()->attach($user);

        $response = $this->get(route('cancelSuscription', $event->id));

        $this->assertEquals(0, $event->user()->count());
    }

    /* 
    testear que el usuario se puede incribir si el evento no esta completo
    testear que el usuario no se puede incribir si el evento esta completo

    testear que el usuario se puede incribir si no ha pasado el tiempo de inscripcion
    testear que el usuario no se puede incribir si ha pasado el tiempo de inscripcion

    testear si el evento se muestra como finalizado si ha pasado la fecha
    */
}
