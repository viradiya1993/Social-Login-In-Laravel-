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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Facebook Socialite

Route::get('login/facebook', 'Auth\LoginController@facebookToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

//Google Socialite

Route::get('login/google', 'Auth\LoginController@googleToProvider')->name('google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

//Twitter Socialite

Route::get('login/twitter', 'Auth\LoginController@twitterToProvider')->name('twitter');
Route::get('login/twitter/callback', 'Auth\LoginController@handleTwitterCallback');
