<?php

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
