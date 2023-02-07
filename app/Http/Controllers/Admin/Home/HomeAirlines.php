<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\AirlineImage;
use Illuminate\Http\Request;

class HomeAirlines extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = AirlineImage::paginate(10);
        return view('Admin.HomeAirlines.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HomeAirlines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('Home/AirlinesImage', 'public');
        $content = new AirlineImage();
        $content->title= $request->title;
        $content->image= $image;
        $content->link= $request->link;
        $content->position= $request->position;
        $content->save();

        return redirect()->route('admin.home-airlines.index');
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
        $content = AirlineImage::find($id);
        return view('Admin.HomeAirlines.edit', compact('content'));
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
        $content = AirlineImage::find($id);
        $content->title= $request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('Home/Image', 'public');
            $content->image = $image;
        }
     
        $content->link= $request->link;
        $content->position= $request->position;
        $content->save();

        return redirect()->route('admin.home-airlines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = AirlineImage::find($id);
        $content->delete();

        return redirect()->route('admin.home-airlines.index');
    }
}
