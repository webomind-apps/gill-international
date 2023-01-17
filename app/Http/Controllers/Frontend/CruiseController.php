<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CruiseShipOption;
use Illuminate\Http\Request;

class CruiseController extends Controller
{
    public function cruise_vacation()
    {
        return view('Frontend.Pages.Cruises.cruise_vacation');
    }

    public function top_cruise_ports()
    {
        return view('Frontend.Pages.Cruises.top_cruise_ports');
    }

    public function cruise_ship_options()
    {
        $cruise_ship_options = CruiseShipOption::first();
        return view('Frontend.Pages.Cruises.cruise_ship_options', compact('cruise_ship_options'));
    }

}
