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

Route::resource('/users', 'UserController');
Route::resource('/slots', 'SlotController');
Route::resource('/roleplays', 'RoleplayController');
Route::resource('/feedbacks', 'FeedbackController',['except'=> ['edit','update']]);
Route::resource('/contacts', 'ContactController',['except'=> ['edit','update']]);

Route::get('worksheets', ['uses' => 'WorksheetController@index', 'as' => 'worksheets.index']);
Route::get('worksheets/create', ['uses' => 'WorksheetController@create', 'as' => 'worksheets.create']);
Route::post('worksheets', ['uses' => 'WorksheetController@generate', 'as' => 'worksheets.generate']);

Route::get('getPDF/{id}', ['uses' => 'PdfController@getPDF', 'as' => 'getPDF']);
Route::get('getRPPDF/{id}', ['uses' => 'PdfController@getRPPDF', 'as' => 'getRPPDF']);


Route::get('/', function () { return view('home'); });
Route::get('plan', function () { return view('image'); });

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('/showers', 'ShowerController');
//Download PDFs
