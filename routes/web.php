<?php

use App\Http\Controllers\Admin\AboutUs\AboutUsController;
use App\Http\Controllers\Admin\Admin\AdminController;
use App\Http\Controllers\Admin\ContactQuery\ContactQueryController;
use App\Http\Controllers\Admin\ContactUs\ContactUsController;
use App\Http\Controllers\Admin\Cruise\CruiseShipOptions;
use App\Http\Controllers\Admin\Cruise\CruiseVacation;
use App\Http\Controllers\Admin\Cruise\TopCruisePortsController;
use App\Http\Controllers\Admin\Destination\DestinationController;
use App\Http\Controllers\Admin\Disney\DisneyController;
use App\Http\Controllers\Admin\Flight\FlightController;
use App\Http\Controllers\Admin\GroupVacation\GroupVacationController;
use App\Http\Controllers\Admin\Home\HomeAirlines;
use App\Http\Controllers\Admin\Home\HomeController as HomeHomeController;
use App\Http\Controllers\Admin\Home\HomeImageController;
use App\Http\Controllers\Admin\Home\HomeTestimonialsController;
use App\Http\Controllers\Admin\InformationLinks\InformationLinksController;
use App\Http\Controllers\Admin\UsefulLinks\UsefulLinksController;
use App\Http\Controllers\Admin\Vacation\VacationController;
use App\Http\Controllers\Admin\Wedding\WeddingController;
use App\Http\Controllers\Frontend\ContactUsController as FrontendContactUsController;
use App\Http\Controllers\Frontend\FooterController;
use App\Http\Controllers\Frontend\Homecontroller;
use App\Http\Controllers\ProfileController;
use App\Models\AboutUs;
use App\Models\Wedding;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home page
Route::get('/', [Homecontroller::class, 'index'])->name('index');
//Cruises page
Route::get('/cruise-vacation', [Homecontroller::class, 'cruise_vacation'])->name('cruise_vacation');
Route::get('/top-cruise-ports', [Homecontroller::class, 'top_cruise_ports'])->name('top_cruise_ports');
Route::get('/cruise-ship-options', [Homecontroller::class, 'cruise_ship_options'])->name('cruise_ship_options');
//wedding page
Route::get('/wedding', [Homecontroller::class, 'wedding'])->name('wedding');
//flights page
Route::get('/flights', [Homecontroller::class, 'flights'])->name('flights');
//vacation page
Route::get('/vacation', [Homecontroller::class, 'vacation'])->name('vacation');
//Disney page
Route::get('/disney', [Homecontroller::class, 'disney'])->name('disney');
//Group Travel
Route::get('/group-travel', [Homecontroller::class, 'group_vacation'])->name('group-vacation');
//About us page
Route::get('/about-us', [Homecontroller::class, 'aboutus'])->name('about-us');
//services page
Route::get('/services', [Homecontroller::class, 'services'])->name('services');
//contact us page
Route::get('/contact-us', [FrontendContactUsController::class, 'contact_us'])->name('contact-us-page');
Route::post('/contact-us-query', [FrontendContactUsController::class, 'contact_us_query'])->name('contact-us-query');

Route::get('useful-links', [FooterController::class, 'useful_links'])->name('footer-useful-links');
Route::get('information-links', [FooterController::class, 'information_links'])->name('footer-information-links');

Route::get('/useful-links/{slug}', [FooterController::class, 'useful_link_pages'])->name('useful-links');
Route::get('/information-links/{slug}', [FooterController::class, 'information_link_pages'])->name('information-links');

Route::get('/dashboard', function () {
    return view('Admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::group(['middleware' => ['auth']], function () {
        Route::group(['middleware' => ['auth']], function () {
            Route::resource('company', DestinationController::class);
            Route::resource('admin', AdminController::class);
            Route::resource('home', HomeHomeController::class);
            Route::resource('home-image', HomeImageController::class);
            Route::resource('home-airlines', HomeAirlines::class);
            Route::resource('home-testimonials', HomeTestimonialsController::class);
            Route::resource('cruises-ship-options', CruiseShipOptions::class);
            Route::resource('cruises-vacations', CruiseVacation::class);
            Route::resource('top-cruise-ports', TopCruisePortsController::class);
            Route::resource('flight', FlightController::class);
            Route::resource('vacation', VacationController::class);
            Route::resource('disney', DisneyController::class);
            Route::resource('wedding', WeddingController::class);
            Route::resource('group-vacation', GroupVacationController::class);
            Route::resource('about-us', AboutUsController::class);
            Route::resource('contact-us', ContactUsController::class);
            Route::resource('contact-us-query', ContactQueryController::class);
            Route::resource('useful-links', UsefulLinksController::class);
            Route::resource('information-links', InformationLinksController::class);
            Route::resource('destination', DestinationController::class);
           
            
        });
    });
});

require __DIR__ . '/auth.php';
