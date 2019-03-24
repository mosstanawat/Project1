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
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*--------------------------------------------------------------*/
// Route::get('/information', 'informationController@index')->name('informationview');
// Route::post('/information','informationController@store')->name('information');

Route::resource('information', 'informationController');
Route::resource('building', 'buildingController');

/*--------------------------------------------------------------*/

Route::post('/continueName', 'continueController@continueName')->name('continueName');
Route::get('/changeImage', 'buildingController@changeImage')->name('changeImage');

Route::get('/pic', function () {
    return view('photobox');
});

Route::get('/', function () {
    return view('homepage');
});


Route::get('/continue', function () {
    return view('continue');
});



