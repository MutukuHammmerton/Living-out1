<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facedes\Auth;

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
    return view('home');
})->middleware(['auth', 'verified']);
Route::get('/home', function() {
    return view('home');
})->middleware(['auth', 'verified']);

Route::get('/logout1', function () {
    return view('home');
});

//       *******************LOGIN WITH GOOGLE************************
Route::get('auth/google/redirect', 'App\Http\Controllers\SocialitesController@redirect');
Route::get('auth/google/callback', 'App\Http\Controllers\SocialitesController@callback');

