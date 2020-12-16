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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/my-register','MainController@register')->name('my-register');

Route::group(['prefix'=>'main'], function(){
//    Route::get('/my-home','MainController@MyHome')->middleware("auth:my_user");
    Route::get('/my-register','MainController@register');
    Route::post('/insert','MainController@insert')->name('my-register');
    Route::get('/login','MainController@login')->middleware('guest:my-user')->name('my-login');
    Route::post('/login','MainController@CheckLogin');
    Route::get('/my-home','MainController@MyHome')->middleware('auth:my-user')->name('home');
});

/////////////////TEST///////////////
//Route::get('/main/my-home','MainController@MyHome');
Route::post('/logout','MainController@logout')->name('logout');









