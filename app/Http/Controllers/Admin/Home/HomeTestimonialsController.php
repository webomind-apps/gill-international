<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeTestimonials;
use Illuminate\Http\Request;

class HomeTestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = HomeTestimonials::paginate(10);
        return view('Admin.HomeTestimonials.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HomeTestimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('Home/TestimoinalsImage', 'public');
        $content = new HomeTestimonials();
        $content->name = $request->name;
        $content->image = $image;
        $content->post = $request->title;
        $content->description = $request->description;
        $content->position = $request->position;
        $content->save();

        return redirect()->route('admin.home-testimonials.index');
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
        $content = HomeTestimonials::find($id);
        return view('Admin.HomeTestimonials.edit', compact('content'));
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
        $content = HomeTestimonials::find($id);
        $content->name = $request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('Home/Image', 'public');
            $content->image = $image;
        }
        $content->post = $request->title;
        $content->description = $request->description;
        $content->position = $request->position;
        $content->save();

        return redirect()->route('admin.home-testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = HomeTestimonials::find($id);
        $content->delete();

        return redirect()->route('admin.home-testimonials.index');
    }
}
