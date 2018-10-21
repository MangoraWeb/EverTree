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

Route::get('/','MainController@index')->name('main');

Route::get('/handstep','HandingController@step1')->name('handstep1');
Route::post('/handstep','HandingController@handstep1')->name('handstep11');

Route::get('/handstep2','HandingController@step2g')->name('handstep2g');
Route::post('/handstep2','HandingController@step2')->name('handstep2');



Route::get('/handstep3','HandingController@step3g')->name('handstep3g');
Route::post('/handstep3','HandingController@step3')->name('handstep3');


//EverTree beta routes
//Powered by MangoraWeb
// v 0.0.0.1 / 10

Route::get('/delivery', function () {
    return view('welcome');
});//Թղթի հանձնում


Auth::routes();

