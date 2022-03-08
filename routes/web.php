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

Route::get('/app', function () {
    return view('layouts.app');
});

Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile','HomeController@profileUser');
    Route::put('/profile/update/{id}','HomeController@profileUpdate');
    Route::prefix('api')->group(function () {
        
        Route::get('/perjalanan','HomeController@show');
        Route::post('/perjalanan/create','HomeController@create');
        Route::get('/perjalanan/{id}','HomeController@edit');
        Route::post('/perjalanan/change-status','HomeController@changeStatus');
    
    });
    
}});

Route::group(['middleware' => ['auth','checkRole:admin']],function(){{
    Route::get('/admin/index','AdminController@AdminIndex');
    Route::get('/admin/create-user','AdminController@CreateUser');
    Route::post('/admin/store-user','AdminController@StoreUser');
    Route::get('/admin/edit-user/{id}','AdminController@EditUser');
    Route::put('/admin/update-user/{id}','AdminController@UpdateUser');
    Route::get('/admin/delete-user/{id}','AdminController@DeleteUser');
    Route::get('/admin/create-kota','AdminController@CreateKota');
    Route::post('/admin/store-kota','AdminController@StoreKota');
    Route::get('/admin/edit-kota/{id}','AdminController@EditKota');
    Route::put('/admin/update-kota/{id}','AdminController@UpdateKota');
    // Route::get('/admin/delete-kota/{id}','AdminController@DeleteKota');
    
}});