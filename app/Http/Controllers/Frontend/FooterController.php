<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\InformationLink;
use App\Models\UsefulLink;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function useful_links()
    {
        $useful_links = UsefulLink::orderBy('position')->get();
        return response()->json($useful_links);
    }
    public function information_links()
    {
        $information_links = InformationLink::all();
        return response()->json($information_links);
    }
   
    public function useful_link_pages($slug)
    {
        // $location_details = Clinic::find($id);
        $link = UsefulLink::where('slug', $slug)->first();

        return view('Frontend.FooterPages.UsefulLinks', compact('link'));
    }
    public function information_link_pages($slug)
    {
        // $location_details = Clinic::find($id);
        $link = InformationLink::where('slug', $slug)->first();

        return view('Frontend.FooterPages.InformationLinks', compact('link'));
    }
}
