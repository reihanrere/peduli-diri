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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','HomeController@profileUser');
Route::put('/profile/update/{id}','HomeController@profileUpdate');

Route::get('/admin/index','AdminController@AdminIndex');

Route::prefix('api')->group(function () {
    
    Route::get('/perjalanan','HomeController@show');
    Route::post('/perjalanan/create','HomeController@create');
    Route::get('/perjalanan/{id}','HomeController@edit');
    Route::post('/perjalanan/change-status','HomeController@changeStatus');

});
