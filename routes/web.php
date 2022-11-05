<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('Contact/', function () {
    return view('contact');
})->name('contact');

Route::get('privacy/', function () {
    return view('privacy');
})->name('privacy');

Route::get('googleababc12c8662e45f.html',function(){
return view('googleababc12c8662e45f.html');
});