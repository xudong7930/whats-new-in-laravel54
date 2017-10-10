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

Route::get('info', function () {
    return phpinfo();
});

Route::get('fool', function () {
    return 'hi, foolishes';
});


Route::get('sbjsw', function () {
    return 'hi, subjsw';
});


Route::get('form', function() {
    return view('form');
});

Route::get('mmp', function() {
    return 'One morning, when Gregor Samsa woke from troubled dreams, he found himself
    transformed in his bed into a horrible vermin. He lay on his armour-like back,
    and if he lifted his head a little he could see his brown belly, slightly domed
    and divided by arches into stiff sections. The bedding was hardly able to cover
    it and seemed ready to slide off any moment. His many legs, pitifully thin
    compared with the size of the rest of him, waved about helplessly as he looked.
    "What\'s happened to me? " he thought.';
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
