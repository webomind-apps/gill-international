<?php

namespace App\Http\Controllers\Admin\Disney;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisneyRequest;
use App\Models\Disney;
use Illuminate\Http\Request;

class DisneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Disney::first();
        return view('Admin.Disney.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DisneyRequest $request)
    {
        $banner = $request->file('banner')->store('Disney/banner', 'public');
        $image = $request->file('image')->store('Disney/image', 'public');

        $content = new Disney();
        $content->title = $request->title;
        $content->banner = $banner;
        $content->description = $request->description;
        $content->image = $image;
        $content->meta_title = $request->meta_title;
        $content->meta_description = $request->meta_description;
        $content->meta_keywords = $request->meta_keywords;
        $content->save();

        return redirect()->route('admin.disney.index');
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
        //
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
        $content = Disney::find($id);
        $content->title = $request->title;
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('Disney/banner', 'public');
            $content->banner = $banner;
        }
        $content->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('Disney/image', 'public');
            $content->image = $image;
        }
        $content->meta_title = $request->meta_title;
        $content->meta_description = $request->meta_description;
        $content->meta_keywords = $request->meta_keywords;
        $content->save();

        return redirect()->route('admin.disney.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
