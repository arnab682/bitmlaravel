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

Route::get('/portfolio', function () {
    return view('portfolio.portfolio');
});

Route::get('/portfolio', function () {
    return view('portfolio/portfolio');
});


Route::get('/mdb', function () {
    return view('mdb/mdb')->with('A', 2);
});

