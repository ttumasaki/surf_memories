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
    Route::get('create','MemoryController@create');
    Route::get('$value/edit','MemoryController@edit');
    Route::get('$value/delete','MemoryController@delete');    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
