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

Route::get('/', 'HomePageController@index');
Route::get('lorem_ipsum','LoremIpsumController@displayForm');
Route::post('lorem_ipsum', 'LoremIpsumController@generateText');
Route::get('user_generator', 'UserGeneratorController@displayForm');
Route::post('user_generator', 'UserGeneratorController@generateUser');
