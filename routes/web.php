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

/*Route::get('/', function () {
	return view('home');
});*/

Route::get('/', function () {
	return view('home');
});

Route::get('/data','StationController@getData')->name('data');
Route::post('save', 'StationController@save');
Route::get('/setdate','StationController@setDate');




Route::get('/result','StationController@index');

Route::post('newsave', 'StationController@newsave');
Route::get('/animal', function () {
	return view('animal');
});
Route::get('/water', function () {
	return view('water');
});
Route::get('/graph', function () {
	return view('graph');
});
Route::get('/map', function () {
	return view('map');
});
Route::get('/location', function () {
	return view('location');
});

//search
Route::post('search', 'StationController@search');
Route::get('/home','StationController@home')->name('data');
