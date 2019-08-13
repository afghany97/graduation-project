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

    Route::resource('complains', 'ComplainsController');

    Route::get('departments/{department}/doctors','DoctorsController@show');

    Route::group(['namespace' => 'Managers','prefix' => 'managers'],function (){

        Route::post('login/dean', 'AuthController@deanLogin');

        Route::post('login/department-manager', 'AuthController@departmentLogin');

        Route::get('chancellor', 'ChancellorController@index');

        Route::get('department-manager', 'DepartmentManagerController@index');

        Route::get('doctors/{doctor}/subjects','SubjectsController@index');

        Route::get('doctors/{doctor}/subjects/{subject}','SubjectsController@show');

        Route::get('departments/{department}/doctors','DoctorsController@index');

        Route::get('complains','ComplainController@index');

        Route::get('complains/{complain}','ComplainController@show');

    });

});
