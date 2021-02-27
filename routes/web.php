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

Route::group(['prefix'=>'memories','middleware'=>'auth'],function(){
    Route::get('index','MemoryController@index')->name('memories.index');
    Route::get('create','MemoryController@create')->name('memories.create');
    Route::post('store','MemoryController@store')->name('memories.store');
    Route::get('{id}/edit','MemoryController@edit')->name('memories.edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
