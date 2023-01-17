<?php

use App\Http\Controllers\Admin\Cruise\CruiseShipOptions;
use App\Http\Controllers\Admin\Cruise\CruiseVacation;
use App\Http\Controllers\Admin\Disney\DisneyController;
use App\Http\Controllers\Admin\Flight\FlightController;
use App\Http\Controllers\Admin\Vacation\VacationController;
use App\Http\Controllers\Admin\Wedding\WeddingController;
use App\Http\Controllers\Frontend\CruiseController;
use App\Http\Controllers\Frontend\Homecontroller;
use App\Http\Controllers\Frontend\WeddingController as FrontendWeddingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/cruise-vacation', [CruiseController::class, 'cruise_vacation'])->name('cruise_vacation');
Route::get('/top-cruise-ports', [CruiseController::class, 'top_cruise_ports'])->name('top_cruise_ports');
Route::get('/cruise-ship-options', [CruiseController::class, 'cruise_ship_options'])->name('cruise_ship_options');
//wedding page
Route::get('/wedding', [FrontendWeddingController::class, 'wedding'])->name('wedding');
//flights page
Route::get('/flights', [Homecontroller::class, 'flights'])->name('flights');
//vacation page
Route::get('/vacation', [Homecontroller::class, 'vacation'])->name('vacation');
//Disney page
Route::get('/disney', [Homecontroller::class, 'disney'])->name('disney');


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
            Route::resource('cruises-ship-options', CruiseShipOptions::class);
            Route::resource('flight', FlightController::class);
            Route::resource('vacation', VacationController::class);
            Route::resource('disney', DisneyController::class);
            
        });
    });

});

require __DIR__.'/auth.php';
