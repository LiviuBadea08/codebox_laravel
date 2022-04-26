<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
//si un usuario se inscribe dos veces al mismo evento el stock sigue bajando (hay que arreglarlo!), y la vista de iniciar session tiene faltas de ortografia.
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::orderBy('date', 'asc')->simplePaginate(6);
        $featured = Event::all()->where('featured', 1);
        return view('home', compact(['events', 'featured']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newEvent = request()->except(['_token', 'featured']);
        $newEvent['featured'] = $request->boolean('featured');
        //when admin creates an event stock is equal to capacity
        $newEvent['stock'] = $newEvent['capacity'];

        Event::create($newEvent);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $event = Event::find($id);
        return view('show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
        
        $event = Event::find($id);
        $checked = '';
        if ($event['featured']) {
            $checked = 'checked';
        } else {
            $checked = '';
        }
        return view('edit', compact(['event', 'checked']));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,)
    {
        //
        $event = Event::find($id);
        $capacity = $event->user;
        $changeEvent = request()->except(['_token', '_method']);
        $changeEvent['featured'] = $request->boolean('featured');
        $changeEvent['stock'] = $request['capacity'] - sizeof($capacity);
        

        Event::where('id', '=', $id)->update($changeEvent);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteRegisteredUser($id)
    {
        $event = Event::find($id);
        $registered = $event->user;

        $event->user()->detach($registered);
    }
    
    public function destroy($id)
    {
        $this->deleteRegisteredUser($id);
        Event::destroy($id);

        return redirect()->route('home');
    }

    public function myEvents()
    {
        $user = Auth::user();
        $myEvent = $user->event;

        return $myEvent;
    }

    public function subscribe($id){
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $event->stock = $event->stock - 1;
        $event->save();
    

        $myEvent = $this->myEvents()->where('id', $id)->first();
        
        switch($myEvent){
            case false:
                $user->event()->attach($event);
                return back()->with('alert', [
                    'type' => 'success',
                    'message' => " Felicidades! Inscripción realizada correctamente",
                    'icon' => 'fa-solid fa-file-pen',
                ]);
                break;

            case true:
                return back()->with('alert', [
                    'type' => 'warning',
                    'message' => "Ups! Ya te inscribiste en este Evento",
                    'icon' => 'fa-solid fa-circle-exclamation',
                ]);
                break;
        }
    }

    public function cancelSuscription($id){
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $user->event()->detach($event);

        $event->stock = $event->stock + 1;
        $event->save();

        return redirect()->route('profile');
    }
}
