<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth group middleware
Route::middleware(['auth'])->group(function() {
    Route::get('/qrcode', 'QrcodeController@index');
    Route::get('/qrcode/generate', 'QrcodeController@generate');
    Route::resource('users', 'UserController');
});