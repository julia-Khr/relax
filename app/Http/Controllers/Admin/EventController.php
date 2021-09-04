<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->latest()->paginate(5);
        return view('admin.events.index', compact('events'));

    }

    // public function showEvent()
    // {   $enterprise = Enterprise::find(1)->enterprises;
    //     $enterprises = Enterprise::get();
    //     $events = Event::orderBy('id', 'desc')->latest()->paginate(5);

    // }

    public function showEvent()
    {

        $enterprise = Enterprise::find(1)->enterprises;
        $enterprises = Enterprise::get();
        $events = Event::orderBy('start_date', 'asc')->take(3)->get();
        return view('visitor.home.greeting', compact( 'events','enterprises'));
    }

    public function joinToEvent($id)
    {
        $enterprise = Enterprise::find(1)->enterprises;
        $enterprises = Enterprise::get();
        return view('visitor.home.join_form', [
            'event' => Event::findOrFail($id)], compact('enterprises'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Event::create($request->all());
        return redirect()->back()->withSuccess('Створено подію : ' . $request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        // $event = Event::find(1)->events;
        // $events = Event::get();
        // return view('visitor.home.greeting', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events.form', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->only(['name', 'description', 'start_date', 'finish_date', 'enterprise_id']));
        return redirect()->back()->withSuccess('Оновлена подія ' . $event->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->withDanger('Видалена подія ' . $event->name);
    }
}
