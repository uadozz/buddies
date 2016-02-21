<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use App\Location;
use App\Activity;
use Auth;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the published events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$events = Event::published()->get();
        $events = Event::all();
        return view('events.index', compact('events'));
    }
    

    /**
     * Show the form for creating a new Event.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$locations = Location::lists('name', 'id');
		$activities = Activity::lists('name', 'id');
        return view('events.create', compact('locations', 'activities'));
    }


    /**
     * Store a newly created Event in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Auth::user()->events()->create($request->all());
        $request->user()->events()->create($request->all());
        return redirect(route('events.index'));
    }


    /**
     * Display the Event.
     *
     * @param  Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }


    /**
     * Show the form for editing the specified Event.
     *
     * @param  Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
		$locations = Location::lists('name', 'id');
		$activities = Activity::lists('name', 'id');
		
        return view('events.edit', compact('event', 'locations', 'activities'));
    }
    
    
    /**
     * Update the specified Event in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        
        return redirect(route('events.show', $event->id));
    }


    /**
     * Remove the specified Event from storage.
     *
     * @param  Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        
        return redirect(route('events.index'));
    }
}
