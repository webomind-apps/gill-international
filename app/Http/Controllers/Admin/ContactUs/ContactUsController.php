<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = ContactUs::first();
        return view('Admin.ContactUs.index', compact('content'));
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
        // dd($request->all());
        $banner = $request->file('banner')->store('Disney/banner', 'public');

        $contactus = new ContactUs();
        $contactus->title  = $request->title;
        $contactus->banner  = $banner;
        $contactus->phone_number  = $request->phone_number;
        $contactus->address  = $request->address;
        $contactus->email = $request->email;
        $contactus->facebook_link = $request->facebook_link;
        $contactus->instagram_link = $request->instagram_link;
        $contactus->twitter_link = $request->twitter_link;
        $contactus->map_link = $request->map_link;
        $contactus->meta_title = $request->meta_title;
        $contactus->meta_description = $request->meta_description;
        $contactus->meta_keywords = $request->meta_keywords;
        $contactus->save();

        return redirect()->route('admin.contact-us.index');
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

        // dd($request->all());
        $contactus = ContactUs::find($id);
        $contactus->title  = $request->title;
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('ContactUs/banner', 'public');
            $contactus->banner = $banner;
        }
        $contactus->phone_number  = $request->phone_number;
        $contactus->address  = $request->address;
        $contactus->email = $request->email;
        $contactus->facebook_link = $request->facebook_link;
        $contactus->instagram_link = $request->instagram_link;
        $contactus->twitter_link = $request->twitter_link;
        $contactus->map_link = $request->map_link;
        $contactus->meta_title = $request->meta_title;
        $contactus->meta_description = $request->meta_description;
        $contactus->meta_keywords = $request->meta_keywords;
        $contactus->save();

        return redirect()->route('admin.contact-us.index');
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
