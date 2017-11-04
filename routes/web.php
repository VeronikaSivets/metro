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

Route::get('/', ['uses' => 'IndexController@index', 'as' => 'home']);

Route::get('/setings', ['uses' => 'SettingsController@index', 'as' => 'settings']);

Route::get('/setings/{id}', ['uses' => 'SettingsController@get', 'as' => 'settings.get']);

Route::get('/diseases/{id}', ['uses' => 'DiseasesController@get', 'as' => 'disease']);

