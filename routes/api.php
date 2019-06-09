<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'],function (){

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

    Route::resource('questionnaires','QuestionnairesController');
    Route::resource('subjects', 'SubjectsController');

    Route::get('doctors/', 'DoctorsController@index');
    Route::get('doctors/{doctor}', 'DoctorsController@show');
    Route::post('doctors/', 'DoctorsController@store');
    Route::post('doctors/{doctor}', 'DoctorsController@update');

    Route::get('doctors/{doctor}/subjects', 'SubjectsController@index');
    Route::post('doctors/{doctor}/subjects', 'SubjectsController@store');
    Route::post('doctors/{doctor}/subjects/{subject}', 'SubjectsController@update');
});
