<?php

use App\Mail\Welcome;
use Facades\App\Services\Twitter;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('info', funciton () {
    return phpinfo();
});

Route::get('form', function() {
    return view('form');
});

Route::post('form', function(Request $request) {
    return $request->all();
});

// more freedom route 
Route::name('register')->prefix('welcome')->get('/', function(){
    return 111;
});

// more adcance create controller and model
// php artisan make:controller FlightController -m Flight


// blade direction components and slot
Route::get('slot', function() {
    return view('home');
});


// markdown email send
// php artisan vendor:publish --tag="laravel-mail"
Route::get('mail', function() {
    $user = App\User::first();
    Mail::to($user)->send(new Welcome($user));
    dump('done');
});

// realtime facades
Route::get('fool', function() {
    Twitter::publish('some of my status');
    dump('done');
});


// browser test
// terminal: composer require laravel/dusk
// app.php: Laravel\Dusk\DuskServiceProvider::class
// terminal: php artisan dusk:install
// run test: php artisan dusk
