<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Thing;
use App\Models\Event;
use App\Models\ThingCategory;
use Illuminate\Http\Request;
use App\Models\EventThing;
use Carbon\Carbon;

class ThingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $thingCategories = ThingCategory::get();
        $currentDate = Carbon::now();
        $events = Event::whereDate('start_date', '>=', $currentDate)->get();
        $things = Thing::get();

        return view('admin.things.form', compact('thingCategories', 'events', 'things'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'event_id' => 'required',
            'thing_category_id' => 'required',
        ]);

        $thing = Thing::create($request->all());
        $thing->events()->sync($request->get('event_id'));

        return redirect()->back()->withSuccess('Додано річ:' . $request->name);

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thingCategories = ThingCategory::get();
        $things = Thing::get();
        $currentDate = Carbon::now();
        return view('admin.things.index', [
            'thing' => Thing::findOrFail($id)
             ],  compact( 'thingCategories', 'things', 'currentDate'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function edit(Thing $thing)
    {
        $thingCategories = ThingCategory::get();
        $events = Event::get();
        $things = Thing::get();
        return view('admin.things.form', compact('thing', 'thingCategories', 'events', 'things'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thing $thing)
    {
        $request->validate([
            'name' => 'required',
            'event_id' => 'required',
            'thing_category_id' => 'required',
        ]);

        $thing -> update($request->all());
        $thing->events()->sync($request->get('event_id'));
        return redirect()->back()->withSuccess('Оновлено ' . $request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thing $thing)
    {
        $thing->delete();

        return redirect()->back()->withDanger($thing->name .'  видалено!');
    }
}
