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

Route::get('who', function() {
    echo exec('whoami');
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


Route::get('app', function() {
    return '从2018年1月1日起，在未告知的情况下故意将性伴侣暴露在HIV感染中这一行为在加州将不再算作重罪。州长Jerry Brown上周五签署了法案，将这一罪行由重罪(felony)降至轻罪(misdemeanor)。

加州立法机构于9月11日通过了这项编号为SB-239的法案。

按照先前的法律，故意将他人暴露在HIV下或使其感染的人可面临最高8年的监禁。新法将最高刑期缩短至6个月。

新法同时将故意捐献HIV感染的血液的罪行从重罪降至轻罪。

法案倡导者参议员Scott Wiener和议员Todd Gloria同属民主党，他们争称，考虑到近些年的医学进步，加州的法律业已过时，对HIV携带者来说是一种侮辱。有证据显示接受常规治疗的HIV携带者经性行为向他人传播感染的概率几可忽略。

Wiener告诉CNN：“减少HIV感染的最有效的途径是HIV去污名化，使人们可以轻松地谈论自己的病情并接受检测和治疗。”

鉴于旧法对于感染风险并无要求，这意味着服用抗HIV药物的人依然会被诉诸重罪，Wiener告诉CNN这“惩罚过重，充满歧视”。

Gloria在周五发表声明称该法案将加州推向“抗击HIV传播的前线”。

Wiener称该法案通过对HIV去污名化，将鼓励人们接受检测，反过来将会降低HIV在加州的传播。

CNN目前还无法采访到州长。';
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
