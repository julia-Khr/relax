<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enterprise;
use App\Models\Event;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::latest()->paginate(5);

        return view('admin.enterprises.index', compact('enterprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enterprises.form');
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
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image_url')) {
            $destinationPath = 'image_url/';
            $enterpriseImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $enterpriseImage);
            $input['image_url'] = "$enterpriseImage";
        }

        Enterprise::create($input);

        return redirect()->back()->withSuccess('Створено захід :' . $request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        return view('admin.enterprises.show', compact('enterprise'));
    }

    public function showEnterprise($id)
    {
        $events = Event::where('enterprise_id', $id)->get();
        return view('visitor.home.enterprise_page', [
            'enterprise' => Enterprise::findOrFail($id)
        ],  compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Enterprise $enterprise)
    {
        return view('admin.enterprises.form', compact('enterprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $enterprise)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'required'
        ]);
        $input = $request->all();
        if ($image = $request->file('image_url')) {
            $destinationPath = 'image_url/';
            $enterpriseImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $enterpriseImage);
            $input['image'] = "$enterpriseImage";
        } else {
            unset($input['image_url']);
        }

        $enterprise->update($input);

        // $enterprise->update($request->only(['name', 'image_url']));

        return redirect()->back()->withSuccess('Оновлено захід: ' . $enterprise->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        $enterprise->delete();
        return redirect()->route('enterprises.index')->withDanger('Захід ' . $enterprise->name . ' видалено!');
    }
}
