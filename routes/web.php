<?php

Route::resource('profile', 'HomeController');

	//Home

Route::get('/', 'HomeController@home');
Route::get('/profile', 'HomeController@index');
Route::post('/profile/store', 'HomeController@store');
Route::get('/profile/update', 'HomeController@update');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/profile/details/{id}', 'HomeController@show');
Route::get('/profile/create', 'HomeController@create');
Route::get('/profile/edit/{id}', 'HomeController@edit');


//About
Route::get('/about', 'AboutController@about');
Route::post('/about/store', 'AboutController@store');
Route::post('about/uploadfile', 'AboutController@upload');







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







//form

Route::resource('form', 'FormController');

//Slider
//Route::get('slider/pdf', 'SliderController@pdf')->name('slider.pdf');
//Route::put('slider/activate','SliderController@activate')->name('myactivate');
Route::put('slider/deactivate','SliderController@deactivate')->name('mydeactivate');
Route::get('slider/downloadxl','SliderController@downloadxl')->name('mydownloadxl');
Route::get('slider/downloadpdf','SliderController@downloadpdf')->name('mydownloadpdf');

Route::resource('slider', 'SliderController');


//SliderShow
Route::get('/sliderShow', 'SliderController@display');



//Image Api
Route::resource('/image', 'ImageController');
//Route::get('/images', 'ImageController@index');



Route::resource('fullForm', 'FullFormController');




