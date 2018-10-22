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

//Route::resource('handstep', 'HandController')->name('steps');


//Route::get('/handstep','HandingController@step1')->name('handstep1');
//Route::post('/handstep','HandingController@handstep1')->name('handstep11');

//Route::get('/handstep2','HandingController@step2g')->name('handstep2g');
//Route::post('/handstep2','HandingController@step2')->name('handstep2');


Route::get('/handstep3','HandingController@step3g')->name('handstep3g');
Route::post('/handstep3','HandingController@step3')->name('handstep3');

Route::group(['prefix' => 'profile'], function(){
   
    Route::get('/{id}', [
        'as' => 'profile',
        'uses' => 'ProfileController@index'
    ]);

});




Route::group(['prefix' => 'news'], function(){
    
    Route::get('/', [
        'as' => 'newsmain',
        'uses' => 'NewsController@index'
    ]);

    Route::get('/{id}', [
        'as' => 'article',
        'uses' => 'NewsController@show'
    ]);

});


Route::group(['prefix' => 'handstep'], function(){
   
    Route::get('/', [
        'as' => 'step1',
        'uses' => 'HandingController@step1'
    ]);

    Route::post('/', [
        'as' => 'step1post',
        'uses' => 'HandingController@handstep1'
    ]);

    Route::get('/2', [
        'as' => 'step2',
        'uses' => 'HandingController@step2'
    ]);

    Route::post('/2', [
        'as' => 'step2post',
        'uses' => 'HandingController@step2g'
    ]);


    Route::get('/3', [
        'as' => 'step3',
        'uses' => 'HandingController@step3'
    ]);

    Route::post('/3', [
        'as' => 'step3post',
        'uses' => 'HandingController@step3g'
    ]);


});

Route::get('/test', function() {
   $city = App\Province::find(23)->City()->where('name', 'Նոր Հաճն')->first();
   return $city->name;

});




Route::group(['prefix' => 'admin'], function(){

    Route::get('/', [
        'as' => 'admin',
        'uses' => 'AdminController@index'
    ]);

});
//EverTree beta routes
//Powered by MangoraWeb
// v 0.0.0.1 / 10

Route::get('/delivery', function () {
    return view('welcome');
});//Թղթի հանձնում


Auth::routes();

