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

Route::get('/home', function (){

    return redirect()->route('subjects.index');

})->name('home');

Route::resource('subjects','SubjectsController');

Route::get('questionnaire/create/{subject}', 'QuestionnairesController@create')->name('questionnaires.create');

Route::post('questionnaire/{subject}','QuestionnairesController@store')->name('questionnaires.store');


Route::get('/complain/create', 'ComplainsController@create');
Route::post('/complain/create', 'ComplainsController@store');
