<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\CruiseShipOption;
use App\Models\Disney;
use App\Models\Flight;
use App\Models\GroupVacation;
use App\Models\Service;
use App\Models\Vacation;
use App\Models\Wedding;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('Frontend.Pages.Home.index');
    }

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

    public function wedding()
    {
        $wedding = Wedding::first();
        return view('Frontend.Pages.Wedding.wedding', compact('wedding'));
    }

    public function group_vacation()
    {
        $group_vacation = GroupVacation::first();
        return view('Frontend.Pages.GroupVacation.group_vacation', compact('group_vacation'));
    }

    public function aboutus()
    {
        $aboutus = AboutUs::first();
        return view('Frontend.Pages.AboutUs.aboutus', compact('aboutus'));
    }

    public function services()
    {
        $services = Service::first();
        return view('Frontend.Pages.AboutUs.aboutus', compact('services'));
    }
}
