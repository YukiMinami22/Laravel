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

Route::get('/home/{field?}/{value?}', 'HomeController@index')->name('home');

Route::get('/verifyemail/{token}','Auth\RegisterController@verify');

Route::get('/login/google', 'Auth\LoginController@redirectToProvider')->name('login/google');

Route::get('/login/google/callback', 'Auth\RegisterController@handleProviderCallback');
