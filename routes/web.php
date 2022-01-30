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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/main', 'main');

Route::view('/about_us', 'pages.about_us');

Route::view('/how-it-works', 'pages.how-it-works');

Route::view('/privacy-policy', 'pages.privacy-policy');

Route::view('/terms-and-conditions', 'pages.terms-and-conditions');

Route::view('/accordiontest', 'pages.accordiontest');

Route::view('/FAQs', 'pages.FAQs');

Route::view('/help', 'pages.help');

Route::view('/home001', 'trials.home001');
