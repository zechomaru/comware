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
/*
generar controller -> php artisan make:controller nombre
*/
Route::get('/', function () {
    return view('welcome');
});
Route::resource('','');
