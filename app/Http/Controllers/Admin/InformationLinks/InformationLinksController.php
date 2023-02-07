<?php

namespace App\Http\Controllers\Admin\InformationLinks;

use App\Http\Controllers\Controller;
use App\Models\InformationLink;
use Illuminate\Http\Request;

class InformationLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = InformationLink::paginate(10);
        return view('Admin.InformationLinks.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.InformationLinks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = new InformationLink();
        $link->title = $request->title;
        $link->slug = $request->slug;
        $link->description = $request->description;
        $link->position = $request->position;
        $link->save();

        return redirect()->route('admin.information-links.index');
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
        $link = InformationLink::find($id);
        return view('Admin.InformationLinks.edit', compact('link'));
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
        $link = InformationLink::find($id);
        $link->title = $request->title;
        $link->slug = $request->slug;
        $link->description = $request->description;
        $link->position = $request->position;
        $link->save();

        return redirect()->route('admin.information-links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = InformationLink::find($id);
        $link->delete();
        return redirect()->route('admin.information-links.index');
    }
}
