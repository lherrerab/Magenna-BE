<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('Magenna', 'AgendaController');
Route::get('contacts',function(){
	return view('contacts');
});
Route::get('index',function(){
	return view('index');
});
Route::get('notes',function(){
	return view('notes');
});
Route::get('agenda',function(){
	return view('agenda');
});

Route::get('/', function () {
    return view('welcome');
});
