<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Response;
use App\Models\Event;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responses = Response::latest()->paginate(5);
        return view('admin.responses.index', compact('responses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::select('id', 'name')->get();
        return view('admin.responses.form', compact('events'));
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
            'author_name' => 'required',
            'text' => 'required',
            'date' => 'required',
            'event_id' => 'required',
            'author_avatar_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('author_avatar_url')) {
            $destinationPath = 'author_avatar_url/';
            $enterpriseImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $enterpriseImage);
            $input['author_avatar_url'] = "$enterpriseImage";
        }

        Response::create($input);

        return redirect()->back()->withSuccess('Додано відгук:' . $request->author_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        return view('admin.responses.index', compact('response'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit(Response $response)
    {
        $events = Event::select('id', 'name')->get();
        return view('admin.responses.form', compact('response', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Response $response)
    {
        $request->validate([
            'author_name' => 'required',
            'text' => 'required',
            'date' => 'required',
            'event_id' => 'required',
            'author_avatar_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('author_avatar_url')) {
            $destinationPath = 'author_avatar_url/';
            $enterpriseImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $enterpriseImage);
            $input['author_avatar_url'] = "$enterpriseImage";
        } else {
            unset($input['author_avatar_url']);
        }

        $response->update($input);


        return redirect()->back()->withSuccess('Оновлено відгук: ' . $response->author_name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        $response->delete();
        return redirect()->route('responses.index')->withSuccess('Відгук  '. $response->author_name .'  видалено!');
    }
}
