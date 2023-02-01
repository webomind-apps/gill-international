<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUs;
use App\Models\ContactQuery;
use App\Models\ContactUs as ModelsContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact_us()
    {
        $content = ModelsContactUs::first();
        return view('Frontend.Pages.ContactUs.ContactUs', compact('content'));
    }
    
    public function contact_us_query(Request $request)
    {
       $query = new ContactQuery();
       $query->name = $request->name;
       $query->email = $request->email;
       $query->phone_number = $request->phone_number;
       $query->message = $request->message;

       $query->save();

       return redirect()->back()->with('message', 'FORM SUBMITTED SUCCESSFULLY');

    }
}
