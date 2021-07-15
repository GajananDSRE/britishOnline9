<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['web'],'domain' => 'britishonline9.dl'], function () {
    Route::get('/', function () {
        return view('users.index');
    });

	Route::get('front-slider',['as' => 'front-slider', 'uses' => 'FrontendController@front_slider']);
    
    Route::group(['namespace' => 'User', 'as' => 'users.'],function(){
        // Route::get('/',['as' => 'index', 'uses' => 'UserController@index']);
        Route::get('/service',['as' => 'service', 'uses' => 'ServiceController@service']);
        Route::get('/gamezone',['as' => 'gamezone', 'uses' => 'GamezoneController@gamezone']);
        Route::get('/payment',['as' => 'payment', 'uses' => 'PaymentController@payment']);
        Route::get('/offer',['as' => 'offer', 'uses' => 'OfferController@offer']);
        Route::get('/contact',['as' => 'contact', 'uses' => 'UserController@contact']);
        Route::get('/profile',['as' => 'profile', 'uses' => 'UserController@profile']);
        Route::get('/table-game',['as' => 'wallet', 'uses' => 'GamezoneController@tableGame']);
        Route::get('/wallet',['as' => 'wallet', 'uses' => 'PaymentController@wallet']);
  
        // Authentication Routes...
        Route::group(['namespace' => 'Auth', 'as' => 'auth.'],function(){
            Route::get('login',['as' => 'login', 'uses' => 'LoginController@showLoginForm'])->middleware('guest');
            Route::post('login',['as' => 'login', 'uses' => 'LoginController@login'])->middleware('guest');

            Route::get('register',['as' => 'register', 'uses' => 'LoginController@showRegistrationForm'])->middleware('guest');
            Route::post('register',['as' => 'register', 'uses' => 'LoginController@register'])->middleware('guest');
        });
        
    });
});

Route::group(['middleware' => ['web'],'domain' => 'ag.britishonline9.dl'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
	Route::group(['namespace' => 'Admin', 'as' => 'admin.'],function(){
		Route::get('/real-worli',['as' => 'real-worli', 'uses' => 'WorliMatkaController@realWorli']);
		Route::get('/indian-casino',['as' => 'indian-casino', 'uses' => 'AdminGamezoneController@indian_casino']);
		Route::get('/live-casino',['as' => 'live-casino', 'uses' => 'AdminGamezoneController@live_casino']);
		Route::get('/casino-userlist',['as' => 'casino-userlist', 'uses' => 'AdminGamezoneController@all_casino_userlist']);
		Route::get('/table-game',['as' => 'table-game', 'uses' => 'AdminGamezoneController@table_game']);
		Route::get('/ludo-game',['as' => 'ludo-game', 'uses' => 'AdminGamezoneController@ludo_game']);
		Route::get('/exchange-id-req',['as' => 'exchange-id-req', 'uses' => 'HomeController@exchange_id_request']);
        Route::get('/profile',['as' => 'profile', 'uses' => 'HomeController@profile']);
        Route::get('/password',['as' => 'password', 'uses' => 'HomeController@password']);
        Route::get('/poster',['as' => 'poster', 'uses' => 'PosterController@index']);
        Route::get('/rules',['as' => 'rules', 'uses' => 'RuleController@index']);
        Route::get('/createId',['as' => 'createId', 'uses' => 'HomeController@createId']);
        Route::get('/wallet',['as' => 'wallet', 'uses' => 'WalletController@index']);

        Route::group(['namespace' => 'Auth', 'as' => 'auth.'],function(){
            Route::get('login',['as' => 'login', 'uses' => 'LoginController@showLoginForm'])->middleware('guest');
	    });
	});
});