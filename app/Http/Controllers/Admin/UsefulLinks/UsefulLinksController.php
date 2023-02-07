<?php

namespace App\Http\Controllers\Admin\UsefulLinks;

use App\Http\Controllers\Controller;
use App\Models\UsefulLink;
use Illuminate\Http\Request;

class UsefulLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = UsefulLink::paginate(10);
        return view('Admin.UsefulLinks.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.UsefulLinks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = $request->file('banner')->store('Useful/banner', 'public');

        $link = new UsefulLink();
        $link->title = $request->title;
        $link->slug = $request->slug;
        $link->banner = $banner;
        $link->description = $request->description;
        $link->link = $request->link;
        $link->position = $request->position;
        $link->save();

        return redirect()->route('admin.useful-links.index');
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
        $link = UsefulLink::find($id);
        return view('Admin.UsefulLinks.edit', compact('link'));
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
        $link = UsefulLink::find($id);
        $link->title = $request->title;
        $link->slug = $request->slug;
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('Useful/banner', 'public');
            $link->banner = $banner;
        }
        $link->description = $request->description;
        $link->link = $request->link;
        $link->position = $request->position;
        $link->save();

        return redirect()->route('admin.useful-links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = UsefulLink::find($id);
        $link->delete();

        return redirect()->route('admin.useful-links.index');
    }
}
