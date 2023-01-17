<?php

namespace App\Http\Controllers\Admin\Cruise;

use App\Http\Controllers\Controller;
use App\Http\Requests\CruiseShipOptions as RequestsCruiseShipOptions;
use App\Models\CruiseShipOption;
use Illuminate\Http\Request;

class CruiseShipOptions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = CruiseShipOption::first();
        return view('Admin.Cruises.CruisesShipOptions.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Cruises.CruisesShipOptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsCruiseShipOptions $request)
    {
        // dd($request->all());
        $banner = $request->file('banner')->store('cruise-ship-options/banner', 'public');
        $header_image_1_img = $request->file('header_image_1')->store('cruise-ship-options/header_image_1', 'public');
        $header_image_2_img = $request->file('header_image_2')->store('cruise-ship-options/header_image_2', 'public');
        $popular_image_img = $request->file('popular_image')->store('cruise-ship-options/popular_image', 'public');
        $premium_image_img = $request->file('premium_image')->store('cruise-ship-options/premium_image', 'public');
        $luxury_image_img = $request->file('luxury_image')->store('cruise-ship-options/luxury_image', 'public');
        $river_cruises_image_img = $request->file('river_cruises_image')->store('cruise-ship-options/river_cruises_image', 'public');

        $content = new CruiseShipOption();
        $content->title = $request->title;
        $content->banner = $banner;
        $content->header_title = $request->header_title;
        $content->header_description = $request->header_description;
        $content->header_image_1 = $header_image_1_img;
        $content->header_image_2 = $header_image_2_img;
        $content->popular_title = $request->popular_title;
        $content->popular_description = $request->popular_description;
        $content->popular_image = $popular_image_img;
        $content->premium_title = $request->premium_title;
        $content->premium_description = $request->premium_description;
        $content->premium_image = $premium_image_img;
        $content->luxury_title = $request->luxury_title;
        $content->luxury_description = $request->luxury_description;
        $content->luxury_image = $luxury_image_img;
        $content->river_cruises_title = $request->river_cruises_title;
        $content->river_cruises_description = $request->river_cruises_description;
        $content->river_cruises_image = $river_cruises_image_img;
        $content->meta_title = $request->meta_title;
        $content->meta_keywords = $request->meta_keywords;
        $content->meta_description = $request->meta_description;

        $content->save();

        return redirect()->route('admin.cruises-ship-options.index');
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
        $content = CruiseShipOption::find($id);
        if ($request->hasFile('banner')) {
            $banner_image = $request->file('banner')->store('cruise-ship-options/banner', 'public');
            $content->banner = $banner_image;
        }
        $content->header_title = $request->header_title;
        $content->header_description = $request->header_description;
        if ($request->hasFile('header_image_1')) {
            $header_image_1_img = $request->file('header_image_1')->store('cruise-ship-options/header_image_1', 'public');
            $content->header_image_1 = $header_image_1_img;
        }
        if ($request->hasFile('header_image_2')) {
            $header_image_2_img = $request->file('header_image_2')->store('cruise-ship-options/header_image_2', 'public');
            $content->header_image_2 = $header_image_2_img;
        }
        $content->popular_title = $request->popular_title;
        $content->popular_description = $request->popular_description;
        if ($request->hasFile('popular_image')) {
            $popular_image_img = $request->file('popular_image')->store('cruise-ship-options/popular_image', 'public');
            $content->popular_image = $popular_image_img;
        }
        $content->premium_title = $request->premium_title;
        $content->premium_description = $request->premium_description;
        if ($request->hasFile('premium_image')) {
            $premium_image_img = $request->file('premium_image')->store('cruise-ship-options/premium_image', 'public');
            $content->premium_image = $premium_image_img;
        }
        $content->luxury_title = $request->luxury_title;
        $content->luxury_description = $request->luxury_description;
        if ($request->hasFile('luxury_image')) {
            $luxury_image_img = $request->file('luxury_image')->store('cruise-ship-options/luxury_image', 'public');
            $content->luxury_image = $luxury_image_img;
        }
        $content->river_cruises_title = $request->river_cruises_title;
        $content->river_cruises_description = $request->river_cruises_description;
        if ($request->hasFile('river_cruises_image')) {
            $river_cruises_image_img = $request->file('river_cruises_image')->store('cruise-ship-options/river_cruises_image', 'public');
            $content->river_cruises_image = $river_cruises_image_img;
        }
        $content->meta_title = $request->meta_title;
        $content->meta_keywords = $request->meta_keywords;
        $content->meta_description = $request->meta_description;
        $content->save();

        return redirect()->route('admin.cruises-ship-options.index');
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
