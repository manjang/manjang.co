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
    return view('index');
});

Route::get('/story', function () {
    return view('story');
});

Route::get('/buba-the-entrepreneur', function () {
    return view('entrepreneur');
});

Route::get('/mobile-application-development', function () {
    return view('mobile');
});

Route::get('/website-design-development', function () {
    return view('website');
});

Route::get('/services', function () {
    return view('services');
});