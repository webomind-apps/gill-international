<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeImage;
use Illuminate\Http\Request;

class HomeImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = HomeImage::paginate(10);
        return view('Admin.HomeImage.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HomeImage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('Home/Image', 'public');
        $content = new HomeImage();
        $content->title= $request->title;
        $content->image= $image;
        $content->description= $request->description;
        $content->link= $request->link;
        $content->position= $request->position;
        $content->save();

        return redirect()->route('admin.home-image.index');
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
    public function edit($id)
    {
        $content = HomeImage::find($id);
        return view('Admin.HomeImage.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $content = HomeImage::find($id);
        $content->title= $request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('Home/Image', 'public');
            $content->image = $image;
        }
        $content->description= $request->description;
        $content->link= $request->link;
        $content->position= $request->position;
        $content->save();

        return redirect()->route('admin.home-image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = HomeImage::find($id);
        $content->delete();

        return redirect()->route('admin.home-image.index');
    }
}
