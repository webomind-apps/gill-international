<?php

namespace App\Http\Controllers\Admin\Cruise;

use App\Http\Controllers\Controller;
use App\Models\CruiseVacation as ModelsCruiseVacation;
use Illuminate\Http\Request;

class CruiseVacation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = ModelsCruiseVacation::first();
        return view('Admin.Cruises.CruiseVacation.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Cruises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $banner = $request->file('banner')->store('cruise-vacations/banner', 'public');
        $section_1_image = $request->file('section_1_image')->store('cruise-vacations/section_1_image', 'public');
        $section_2_image = $request->file('section_2_image')->store('cruise-vacations/section_2_image', 'public');
        $section_3_image = $request->file('section_3_image')->store('cruise-vacations/section_3_image', 'public');
        $section_4_image = $request->file('section_4_image')->store('cruise-vacations/section_4_image', 'public');

        $content =  new ModelsCruiseVacation();
        $content->title = $request->title;
        $content->banner =  $banner;
        $content->section_1_title = $request->section_1_title;
        $content->section_1_image = $section_1_image;
        $content->section_1_description = $request->section_1_description;
        $content->section_2_title = $request->section_2_title;
        $content->section_2_image = $section_2_image;
        $content->section_2_description = $request->section_2_description;
        $content->section_3_title = $request->section_3_title;
        $content->section_3_image = $section_3_image;
        $content->section_3_description = $request->section_3_description;
        $content->section_4_title = $request->section_4_title;
        $content->section_4_image = $section_4_image;
        $content->section_4_description = $request->section_4_description;
        $content->meta_title = $request->meta_title;
        $content->meta_keywords = $request->meta_keywords;
        $content->meta_description = $request->meta_description;
        $content->save();

        return redirect()->route('admin.cruises-vacations.index');
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
        $content =  ModelsCruiseVacation::find($id);
        $content->title = $request->title;
        if ($request->hasFile('banner')) {
            $banner_img = $request->file('banner')->store('cruise-vacations/banner', 'public');
            $content->banner = $banner_img;
        }
        $content->section_1_title = $request->section_1_title;
        if ($request->hasFile('section_1_image')) {
            $section_1_image = $request->file('section_1_image')->store('cruise-vacations/section_1_image', 'public');
            $content->section_1_image = $section_1_image;
        }
        $content->section_1_description = $request->section_1_description;
        $content->section_2_title = $request->section_2_title;
        if ($request->hasFile('section_2_image')) {
            $section_2_image = $request->file('section_2_image')->store('cruise-vacations/section_2_image', 'public');
            $content->section_2_image = $section_2_image;
        }
        $content->section_2_description = $request->section_2_description;
        $content->section_3_title = $request->section_3_title;
        if ($request->hasFile('section_3_image')) {
            $section_3_image = $request->file('section_3_image')->store('cruise-vacations/section_3_image', 'public');
            $content->section_3_image = $section_3_image;
        }
        $content->section_3_description = $request->section_3_description;
        $content->section_4_title = $request->section_4_title;
        if ($request->hasFile('section_4_image')) {
            $section_4_image = $request->file('section_4_image')->store('cruise-vacations/section_4_image', 'public');
            $content->section_4_image = $section_4_image;
        }
        $content->section_4_description = $request->section_4_description;
        $content->meta_title = $request->meta_title;
        $content->meta_keywords = $request->meta_keywords;
        $content->meta_description = $request->meta_description;
        $content->save();

        return redirect()->route('admin.cruises-vacations.index');
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
