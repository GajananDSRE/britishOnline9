<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
            Route::match(['get','post'],'logout', ['as' => 'logout', 'uses' => 'LoginController@logout'])->middleware('auth');
        });
        
    });
});

Route::group(['middleware' => ['web'],'domain' => 'ag.britishonline9.dl'], function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // });
          
	Route::group(['namespace' => 'Admin', 'as' => 'admin.'],function(){  
        Route::get('/',['as' => 'index', 'uses' => 'HomeController@index']);
		Route::get('/real-worli',['as' => 'real-worli', 'uses' => 'WorliMatkaController@realWorli']);
		Route::get('/indian-casino',['as' => 'indian-casino', 'uses' => 'AdminGamezoneController@indian_casino']);
		Route::get('/live-casino',['as' => 'live-casino', 'uses' => 'AdminGamezoneController@live_casino']);
		Route::get('/casino-userlist',['as' => 'casino-userlist', 'uses' => 'AdminGamezoneController@all_casino_userlist']);
		Route::get('/table-game',['as' => 'table-game', 'uses' => 'AdminGamezoneController@table_game']);
		Route::get('/ludo-game',['as' => 'ludo-game', 'uses' => 'AdminGamezoneController@ludo_game']);
		Route::get('/exchange-id-req',['as' => 'exchange-id-req', 'uses' => 'HomeController@exchange_id_request']);
		Route::get('/client-list',['as' => 'client-list', 'uses' => 'ClientController@client_list']);
		Route::get('/account-management',['as' => 'account-management', 'uses' => 'BankingController@account_management']);
		Route::get('/deposite-request',['as' => 'deposite-request', 'uses' => 'BankingController@deposite_request']);
		Route::get('/withdrawl-request',['as' => 'withdrawl-request', 'uses' => 'BankingController@withdrawl_request']);
		Route::get('/downline-request-list',['as' => 'downline-request-list', 'uses' => 'BankingController@downline_request_list']);
		Route::get('/time-management',['as' => 'time-management', 'uses' => 'BankingController@time_management']);
		Route::get('/request-list',['as' => 'request-list', 'uses' => 'BankingController@request_list']);
        Route::get('/profile',['as' => 'profile', 'uses' => 'HomeController@profile']);
        Route::get('/password',['as' => 'password', 'uses' => 'HomeController@password']);
        Route::get('/poster',['as' => 'poster', 'uses' => 'PosterController@index']);
        Route::get('/rules',['as' => 'rules', 'uses' => 'RuleController@index']);
        Route::get('/createId',['as' => 'createId', 'uses' => 'HomeController@createId']);
        Route::get('/wallet',['as' => 'wallet', 'uses' => 'WalletController@wallet']);
        Route::get('/book-details-one',['as' => 'book-details-one', 'uses' => 'ReportController@book_details_one']);
        Route::get('/book-details-two',['as' => 'book-details-two', 'uses' => 'ReportController@book_details_two']);
        Route::get('/daily-pl',['as' => 'daily-pl', 'uses' => 'ReportController@dailypl']);
        Route::get('/finalsheet',['as' => 'finalsheet', 'uses' => 'ReportController@finalsheet']);
        Route::get('/admin-support',['as' => 'admin-support', 'uses' => 'HomeController@admin_support']);

        // Admin Authentication Routes...
        Route::group(['namespace' => 'Auth', 'as' => 'auth.'],function(){
            Route::get('login',['as' => 'login', 'uses' => 'LoginController@showLoginForm'])->middleware('guest');
            Route::post('login',['as' => 'login', 'uses' => 'LoginController@login'])->middleware('guest');
            Route::match(['get','post'],'logout', ['as' => 'logout', 'uses' => 'LoginController@logout'])->middleware('auth'); 
	    });
	});
});
