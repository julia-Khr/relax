<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThingCategory;
use Illuminate\Http\Request;
use App\Models\Thing;

class ThingCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thingCategories = ThingCategory::latest()->paginate(5);
        $things = Thing::where('id','thing_сategory_id' )->get();
        return view('admin.thing_categories.index', compact('thingCategories', 'things'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $things = Thing::get();
        $thingCategories = ThingCategory::get();
        return view('admin.thing_categories.form', compact('things', 'thingCategories'));
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
            'thing_img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $input = $request->all();

        if ($image = $request->file('thing_img_url')) {
            $destinationPath = 'thing_img_url/';
            $thingCategoryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $thingCategoryImage);
            $input['thing_img_url'] = "$thingCategoryImage";
        }

        ThingCategory::create($input);

        return redirect()->back()->withSuccess('Створено категорію речей :' . $request->name);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ThingCategory $thingCategory)
    {
        $things = Thing::where('thing_category_id', $thingCategory->id)->get();

        return view('admin.thing_categories.form', compact('thingCategory', 'things'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThingCategory $thingCategory)
    {
        $request->validate([
            'name' => 'required',
            'thing_img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('thing_img_url')) {
            $destinationPath = 'thing_img_url/';
            $thingCategoryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $thingCategoryImage);
            $input['thing_img_url'] = "$thingCategoryImage";
        }else {
            unset($input['thing_img_url']);
        }

        $thingCategory->update($input);


        return redirect()->back()->withSuccess('Оновлено категорію речей :' . $thingCategory->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThingCategory $thingCategory)
    {
        $thingCategory->delete();
        return redirect()->route('thingCategories.index')->withDanger('Категорію  '. $thingCategory->name .'  видалено!');
    }
}
