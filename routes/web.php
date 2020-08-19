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

Route::get('/home', 'ConversationController@index')->name('home');
Route::get('/conversations', 'ConversationController@index')->name('conversations.index');
Route::get('/conversations/{user}', 'ConversationController@index');
Route::post('/conversations/{user}', 'ConversationController@store');
