<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Disney;
use App\Models\Flight;
use App\Models\Vacation;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('Frontend.Pages.Home.index');
    }
    public function flights()
    {
        $flights = Flight::first();
        return view('Frontend.Pages.Flight.flight', compact('flights'));
    }
    public function vacation()
    {
        $vacation = Vacation::first();
        return view('Frontend.Pages.Vacation.vacation', compact('vacation'));
    }
    public function disney()
    {
        $disney = Disney::first();
        return view('Frontend.Pages.Disney.disney', compact('disney'));
    }

   
}
