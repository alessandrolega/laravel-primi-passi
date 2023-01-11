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

    $title = "Hello World";
    return view('home', compact('title'));
});

Route::get('/about', function () {

    $title2 = "About Us";
    return view('about', compact('title2'));
});

Route::get('/work', function () {

    $title3 = "Work With Us";
    return view('work', compact('title3'));
});

Route::get('/join', function () {

    $title4 = "Join Our Community";
    return view('join', compact('title4'));
});
