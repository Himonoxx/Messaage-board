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

Route::get('/', 'MessagesController@index');

Route::get('messages','MessagesController@index')->name('messages.index');

Route::resource('messages','MessagesController');

Route::get('messages/{id}/edit','MessagesController@edit')->name('messages.edit');