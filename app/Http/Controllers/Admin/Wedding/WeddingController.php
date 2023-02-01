<?php

namespace App\Http\Controllers\Admin\Wedding;

use App\Http\Controllers\Controller;
use App\Http\Requests\WeddingRequest;
use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Wedding::first();
        return view('Admin.Wedding.index', compact('content'));
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
    public function store(WeddingRequest $request)
    {

        // dd($request->all());
        $banner = $request->file('banner')->store('Wedding/banner', 'public');
        $destination_wedding_image = $request->file('destination_wedding_image')->store('Wedding/destination_wedding_image', 'public');
        $destination_wedding_form_image = $request->file('destination_wedding_form_image')->store('Wedding/destination_wedding_form_image', 'public');
        $destination_wedding_plan_image = $request->file('destination_wedding_plan_image')->store('Wedding/destination_wedding_plan_image', 'public');
        $about_image = $request->file('about_image')->store('Wedding/about_image', 'public');
        $gift_registry_image = $request->file('gift_registry_image')->store('Wedding/gift_registry_image', 'public');
        $easy_registration_image = $request->file('easy_registration_image')->store('Wedding/easy_registration_image', 'public');
        $buying_process_image = $request->file('buying_process_image')->store('Wedding/buying_process_image', 'public');
        $gift_card_image = $request->file('gift_card_image')->store('Wedding/gift_card_image', 'public');
        $guest_image = $request->file('guest_image')->store('Wedding/guest_image', 'public');
        $advantage_image = $request->file('advantage_image')->store('Wedding/advantage_image', 'public');

        $content = new Wedding();
        $content->title = $request->title;
        $content->banner = $banner;
        //destination wedding section 1
        $content->destination_wedding_title = $request->destination_wedding_title;
        $content->destination_wedding_image = $destination_wedding_image;
        $content->destination_wedding_description = $request->destination_wedding_description;
        //destination wedding section 2
        $content->destination_wedding_form_title = $request->destination_wedding_form_title;
        $content->destination_wedding_form_description = $request->destination_wedding_form_description;
        $content->destination_wedding_form_image = $destination_wedding_form_image;
        //destination wedding section 3
        $content->destination_wedding_plan_title = $request->destination_wedding_plan_title;
        $content->destination_wedding_plan_image = $destination_wedding_plan_image;
        $content->destination_wedding_plan_description = $request->destination_wedding_plan_description;
        //about section
        $content->about_title = $request->about_title;
        $content->about_image = $about_image;
        $content->about_description = $request->about_description;
        //gift  registry section
        $content->gift_registry_title = $request->gift_registry_title;
        $content->gift_registry_image = $gift_registry_image;
        $content->gift_registry_description = $request->gift_registry_description;
        //Easy registration
        $content->easy_registration_title = $request->easy_registration_title;
        $content->easy_registration_image = $easy_registration_image;
        $content->easy_registration_description = $request->easy_registration_description;
        //Buying process 
        $content->buying_process_title = $request->buying_process_title;
        $content->buying_process_image = $buying_process_image;
        $content->buying_process_description = $request->buying_process_description;
        //Gift cards
        $content->gift_card_title = $request->gift_card_title;
        $content->gift_card_image = $gift_card_image;
        $content->gift_card_description = $request->gift_card_description;
        //let your guests know
        $content->guest_title = $request->guest_title;
        $content->guest_image = $guest_image;
        $content->guest_description = $request->guest_description;
        //advantage of destination wedding
        $content->advantage_title = $request->advantage_title;
        $content->advantage_image = $advantage_image;
        $content->advantage_description = $request->advantage_description;
        //meta details
        $content->meta_title = $request->meta_title;
        $content->meta_keywords = $request->meta_keywords;
        $content->meta_description = $request->meta_description;

        $content->save();

        return redirect()->route('admin.wedding.index');
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
        $content = Wedding::find($id);
        $content->title = $request->title;
        // $content->banner = $request->banner; 
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('Wedding/banner', 'public');
            $content->banner = $banner;
        }
        //destination wedding section 1
        $content->destination_wedding_title = $request->destination_wedding_title;
        // $content->destination_wedding_image = $destination_wedding_image;
        if ($request->hasFile('destination_wedding_image')) {
            $destination_wedding_image = $request->file('destination_wedding_image')->store('Wedding/destination_wedding_image', 'public');
            $content->destination_wedding_image = $destination_wedding_image;
        }
        $content->destination_wedding_description = $request->destination_wedding_description;
        //destination wedding section 2
        $content->destination_wedding_form_title = $request->destination_wedding_form_title;
        $content->destination_wedding_form_description = $request->destination_wedding_form_description;
        // $content->destination_wedding_form_image = $destination_wedding_form_image;
        if ($request->hasFile('destination_wedding_form_image')) {
            $destination_wedding_form_image = $request->file('destination_wedding_form_image')->store('Wedding/destination_wedding_form_image', 'public');
            $content->destination_wedding_form_image = $destination_wedding_form_image;
        }
        //destination wedding section 3
        $content->destination_wedding_plan_title = $request->destination_wedding_plan_title;
        // $content->destination_wedding_plan_image = $destination_wedding_plan_image;
        if ($request->hasFile('destination_wedding_plan_image')) {
            $destination_wedding_plan_image = $request->file('destination_wedding_plan_image')->store('Wedding/destination_wedding_plan_image', 'public');
            $content->destination_wedding_plan_image = $destination_wedding_plan_image;
        }
        $content->destination_wedding_plan_description = $request->destination_wedding_plan_description;
        //about section
        $content->about_title = $request->about_title;
        // $content->about_image = $about_image;
        if ($request->hasFile('about_image')) {
            $about_image = $request->file('about_image')->store('Wedding/about_image', 'public');
            $content->about_image = $about_image;
        }
        $content->about_description = $request->about_description;
        //gift  registry section
        $content->gift_registry_title = $request->gift_registry_title;
        // $content->gift_registry_image = $gift_registry_image;
        if ($request->hasFile('gift_registry_image')) {
            $gift_registry_image = $request->file('gift_registry_image')->store('Wedding/gift_registry_image', 'public');
            $content->gift_registry_image = $gift_registry_image;
        }
        $content->gift_registry_description = $request->gift_registry_description;
        //Easy registration
        $content->easy_registration_title = $request->easy_registration_title;
        // $content->easy_registration_image = $easy_registration_image;
        if ($request->hasFile('easy_registration_image')) {
            $easy_registration_image = $request->file('easy_registration_image')->store('Wedding/easy_registration_image', 'public');
            $content->easy_registration_image = $easy_registration_image;
        }
        $content->easy_registration_description = $request->easy_registration_description;
        //Buying process 
        $content->buying_process_title = $request->buying_process_title;
        // $content->buying_process_image = $buying_process_image;
        if ($request->hasFile('buying_process_image')) {
            $buying_process_image = $request->file('buying_process_image')->store('Wedding/buying_process_image', 'public');
            $content->buying_process_image = $buying_process_image;
        }
        $content->buying_process_description = $request->buying_process_description;
        //Gift cards
        $content->gift_card_title = $request->gift_card_title;
        // $content->gift_card_image = $gift_card_image;
        if ($request->hasFile('gift_card_image')) {
            $gift_card_image = $request->file('gift_card_image')->store('Wedding/gift_card_image', 'public');
            $content->gift_card_image = $gift_card_image;
        }
        $content->gift_card_description = $request->gift_card_description;
        //let your guests know
        $content->guest_title = $request->guest_title;
        // $content->guest_image = $guest_image;
        if ($request->hasFile('guest_image')) {
            $guest_image = $request->file('guest_image')->store('Wedding/guest_image', 'public');
            $content->guest_image = $guest_image;
        }
        $content->guest_description = $request->guest_description;
        //advantage of destination wedding
        $content->advantage_title = $request->advantage_title;
        // $content->advantage_image = $advantage_image;
        if ($request->hasFile('advantage_image')) {
            $advantage_image = $request->file('advantage_image')->store('Wedding/advantage_image', 'public');
            $content->advantage_image = $advantage_image;
        }
        $content->advantage_description = $request->advantage_description;
        //meta details
        $content->meta_title = $request->meta_title;
        $content->meta_keywords = $request->meta_keywords;
        $content->meta_description = $request->meta_description;

        $content->save();

        return redirect()->route('admin.wedding.index');
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
