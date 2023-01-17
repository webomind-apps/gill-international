<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function wedding()
    {
        return view('Frontend.Pages.Wedding.wedding');
    }
}
