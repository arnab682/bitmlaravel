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

Route::get('/welcome', function () {
    return view('welcome');
});

/*Route::get('/home', function () {
    return view('home.home');
});*/

Route::get('/portfolio', function () {
    return view('portfolio.portfolio');
});


Route::get('/mdb', function () {
    return view('mdb/mdb')->with('A', 2);
});

/*
Route::get('/portfolio', function () {
    return view('portfolio/portfolio');
});
*/

/*Home*/

Route::get('/', 'HomeController@home');
Route::get('/profile', 'HomeController@profile');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/profile/details/{id}', 'HomeController@details');
Route::get('/profile/lol/{id}', 'HomeController@lol');










