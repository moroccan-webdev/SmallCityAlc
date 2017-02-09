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

//users routes
//Route::get('/users', ['as' => 'users.index' , 'uses' => 'UserController@index']);
//Route::get('/profile', 'UserController@profile');
//Route::post('/profile', 'UserController@update_avatar');
Route::resource('/users', 'UserController');
Route::get('getPDF/{id}', ['uses' => 'PdfController@getPDF', 'as' => 'getPDF']);



//Route::get('/', function () {return view('welcome');});
Route::get('/', function () {
    return view('partials.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('/showers', 'ShowerController');
//Download PDFs
