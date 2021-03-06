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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/{nome}', 'TestController@index');

Route::get('notas', 'TestController@notas');

Route::get('blog', 'PostController@index');

Route::get('clientes', 'ClienteController@index');
