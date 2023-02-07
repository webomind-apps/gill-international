<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CruiseShipOption;
use App\Models\CruiseVacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class CruiseController extends Controller
{
    public function cruise_vacation()
    {
        $cruise_vacation = CruiseVacation::first();
        return view('Frontend.Pages.Cruises.cruise_vacation', compact('cruise_vacation'));
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


