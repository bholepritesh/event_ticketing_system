<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Session;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    Session::forget('user');
    return view('login');
});

Route::get('/registration', function () {
    Session::forget('user');
    return view('users.registration');
});
Route::post('/user-store', [AuthController::class, 'userStore'])->name('userstore');


Route::get('/homepage', [EventController::class, 'homepage'])->name('homepage');
Route::get('/upcoming', [EventController::class, 'upcoming'])->name('upcoming');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/addcheckout', [EventController::class, 'addcheckout'])->name('addcheckout');
Route::post('/geteventdetails', [EventController::class, 'geteventdetails'])->name('geteventdetails');
Route::post('/confirmCheckout', [EventController::class, 'confirmCheckout'])->name('confirmCheckout');
Route::post('/addComment', [EventController::class, 'addComment'])->name('addComment');
Route::get('/search/{searchtext}', [EventController::class, 'search'])->name('search');
Route::get('/search', [EventController::class, 'search'])->name('search');




Route::get('/details/{id}', [EventController::class, 'eventDetails']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware([])->group(function () {
    // Route::post('LoginPost', 'Auth\LoginController@login');
    Route::post('/loginpost', [AuthController::class, 'userlogin']);
    

});




Route::middleware(['role:organizer'])->group(function () {
    Route::get('/organizer-dashboard', [OrganizerController::class, 'index'])->name('organizerdashboard');
    Route::get('/event-add', [OrganizerController::class, 'addEvent'])->name('addevent');
    Route::post('/event-store', [OrganizerController::class, 'eventStore'])->name('eventstore');
    Route::get('/event-listing', [OrganizerController::class, 'EventListing'])->name('eventlisting');
    Route::get('/event-attendees/{id}', [OrganizerController::class, 'EventAttendees'])->name('EventAttendees');
    Route::get('/event-edit/{id}', [OrganizerController::class, 'Eventedit'])->name('Eventedit');
    Route::post('/event-update/{id}', [OrganizerController::class, 'eventUpdate'])->name('eventupdate');
    Route::get('/event-status/{id}', [OrganizerController::class, 'EventStatus'])->name('Eventstatus');

    

});

Route::middleware(['role:attendee'])->group(function () {
    Route::get('/attendee-dashboard', [AttendeeController::class, 'index'])->name('attendeedashboard');
});
