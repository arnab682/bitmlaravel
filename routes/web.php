<?php

//Route::resource('profile', 'HomeController');

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// /*Route::get('/home', function () {
//     return view('home.home');
// });*/

// Route::get('/portfolio', function () {
//     return view('portfolio.portfolio');
// });


// Route::get('/mdb', function () {
//     return view('mdb/mdb')->with('A', 2);
// });

/*
Route::get('/portfolio', function () {
    return view('portfolio/portfolio');
});
*/

/*Home*/

Route::get('/', 'HomeController@home');
Route::get('/profile', 'HomeController@index');
Route::get('/profile/store', 'HomeController@store');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/profile/details/{id}', 'HomeController@show');
Route::get('/profile/lol/{id}', 'HomeController@lol');
Route::get('/profile/create', 'HomeController@create');
Route::get('/profile/edit/{id}', 'HomeController@edit');










