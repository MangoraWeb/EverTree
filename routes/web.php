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

 Route::get('notafications', [
    'as' => 'notafication',
    'uses' => 'Notecontroller@index'
 ]);



 
Route::get('/gardens', [
    'as' => 'gardens',
    'uses' => 'GardenController@allgardens'
]);
    

Route::get('/post',[
    'uses' => 'PostController@index',
    'as' =>  'posts'
 ]);
 Route::get('/post/{slug}',[
    'uses' => 'PostController@show',
    'as' =>  'posts.show'
 ]);

   
Route::get('/home', function() {
    return redirect('/handstep');
});

Route::get('/about',[
    'as'=>'about',
    'uses'=>'MainController@about'
]);


Route::get('/test',function() {
    return view('test');
});


Route::get('/mygarden',[
    'as' => 'garden',
    'uses' => 'GardenController@index'
]);


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

Route::get('/getuser/{id}',function($id){
   $user = App\User::find($id);
    return $user;
    
});



Route::group(['prefix' => 'admin'], function(){

  Route::get('/',[
    'as'=> 'admin.main',
    'uses'=> 'AdminController@index',
  ]);

            //news routes
                Route::get('/news',[
                    'as'=> 'admin.main',
                    'uses'=> 'AdminController@news',
                ]);
                Route::get('/news/{slug}',[
                    'as'=> 'admin.news',
                    'uses'=> 'AdminController@newsshow',
                ]);

           //news routes


}); 

Route::get('/testfront',function(){

    return view('test');

});


Route::group(['prefix' => 'profile','middleware'=>'auth'], function(){

    Route::get('/', [
        'as' => 'profile',
        'uses' => 'ProfileController@index'
    ]);
    Route::get('/{id}', [
        'as' => 'profileUser',
        'uses' => 'ProfileController@profileod'
    ]);
});

Route::get('/qr/{id}', function ($id) 
{


    
   $mainlink =  "http://127.0.0.1:8000/profile" . $id;
    
    
    return QRCode::text($mainlink)->svg();
});    
//EverTree beta routes
//Powered by MangoraWeb
// v 0.0.0.1 / 10



//Auth::routes();


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
