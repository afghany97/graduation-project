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

    Route::get('questionnaires/{subject}','QuestionnairesController@show');
    Route::post('questionnaires','QuestionnairesController@store');


    Route::get('subjects', 'SubjectsController@index');
    Route::get('subjects/{doctor}', 'SubjectsController@show');


//    Route::resource('questionnaires','QuestionnairesController');
//    Route::post('subjects', 'SubjectsController@store');
//    Route::get('subjects/{subject}', 'SubjectsController@show');
//    Route::post('subjects/{subject}', 'SubjectsController@update');

//    Route::get('doctors', 'DoctorsController@index');
//    Route::get('doctors/{doctor}', 'DoctorsController@show');
//    Route::post('doctors', 'DoctorsController@store');
//    Route::post('doctors/{doctor}', 'DoctorsController@update');

    Route::get('doctors/{doctor}/subjects', 'SubjectsController@getdoctorsubject');
//    Route::post('doctors/{doctor}/subjects', 'SubjectsController@storesubject');
//    Route::get('users/{user}/subjects', 'SubjectsController@getUserSubject');

    Route::post('complain', 'ComplainsController@store');



});
