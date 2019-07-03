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

Route::get('/home', 'HomeController@index')->name('home'); //unica pagina che è relegata solamente agli elementi loggati per il momento;
Route::post('/home', 'HomeController@SendMail')->name('send.mail'); //unica pagina che è relegata solamente agli elementi loggati per il momento;
