<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\AirlineImage;
use App\Models\Home;
use App\Models\HomeImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Home::first();
        $home_images = HomeImage::all();
        $airlines = AirlineImage::all();
        return view('Admin.Home.index', compact('content', 'home_images', 'airlines'));
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
    public function store(Request $request)
    {

        $banner = $request->file('banner')->store('Home/banner', 'public');
        $about_us_image = $request->file('about_us_image')->store('Home/about_us_image', 'public');
        $read_more_image = $request->file('read_more_image')->store('Home/read_more_image', 'public');
        $special_offer_banner_1 = $request->file('special_offer_banner_1')->store('Home/special_offer_banner_1', 'public');
        $special_offer_banner_2 = $request->file('special_offer_banner_2')->store('Home/special_offer_banner_2', 'public');
        $new_letter_image = $request->file('new_letter_image')->store('Home/new_letter_image', 'public');

        $content = new Home();
        $content->title = $request->title;
        $content->banner = $banner;
        $content->about_us_title = $request->about_us_title;
        $content->about_us_description = $request->about_us_description;
        $content->about_us_image = $about_us_image;
        $content->read_more_title = $request->read_more_title;
        $content->read_more_image = $read_more_image;
        $content->read_more_description = $request->read_more_description;
        $content->read_more_link = $request->read_more_link;
        $content->special_offer_banner_1 = $special_offer_banner_1;
        $content->special_offer_banner_2 = $special_offer_banner_2;
        $content->new_letter_image = $new_letter_image;
        $content->meta_title = $request->meta_title;
        $content->meta_description = $request->meta_description;
        $content->meta_keywords = $request->meta_keywords;
        $content->save();

        return redirect()->route('admin.home.index');
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
        $content = Home::find($id);
        $content->title = $request->title;
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('Home/banner', 'public');
            $content->banner = $banner;
        }
        $content->about_us_title = $request->about_us_title;
        $content->about_us_description = $request->about_us_description;
        if ($request->hasFile('about_us_image')) {
            $about_us_image = $request->file('about_us_image')->store('Home/about_us_image', 'public');
            $content->about_us_image = $about_us_image;
        }
        $content->read_more_title = $request->read_more_title;
        if ($request->hasFile('read_more_image')) {
            $read_more_image = $request->file('read_more_image')->store('Home/read_more_image', 'public');
            $content->read_more_image = $read_more_image;
        }
        $content->read_more_description = $request->read_more_description;
        $content->read_more_link = $request->read_more_link;
        if ($request->hasFile('special_offer_banner_1')) {
            $special_offer_banner_1 = $request->file('special_offer_banner_1')->store('Home/special_offer_banner_1', 'public');
            $content->special_offer_banner_1 = $special_offer_banner_1;
        }
        if ($request->hasFile('special_offer_banner_2')) {
            $special_offer_banner_2 = $request->file('special_offer_banner_2')->store('Home/special_offer_banner_2', 'public');
            $content->special_offer_banner_2 = $special_offer_banner_2;
        }
        if ($request->hasFile('new_letter_image')) {
            $new_letter_image = $request->file('new_letter_image')->store('Home/new_letter_image', 'public');
            $content->new_letter_image = $new_letter_image;
        }
        $content->meta_title = $request->meta_title;
        $content->meta_description = $request->meta_description;
        $content->meta_keywords = $request->meta_keywords;
        $content->save();

        return redirect()->route('admin.home.index');
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
