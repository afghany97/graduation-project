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
    return redirect()->route('subjects.index');
});


Auth::routes();


Route::get('/home', function (){

    return redirect()->route('subjects.index');

})->name('home');

Route::resource('subjects','SubjectsController');

Route::get('questionnaire/create/{subject}', 'QuestionnairesController@create')->name('questionnaires.create');

Route::post('questionnaire/{subject}','QuestionnairesController@store')->name('questionnaires.store');

Route::resource('complains','ComplainsController');

Route::prefix('managers')->group(function () {

    Route::get('dean/login', 'Auth\ManagerLoginController@loginDeanView')->name('manager.auth.login.dean');

    Route::get('department-manager/login', 'Auth\ManagerLoginController@loginDepartmentView')->name('manager.auth.login.department_manager');

    Route::post('login', 'Auth\ManagerLoginController@loginDepartment')->name('manager.auth.loginDepartment');

    Route::post('dean/login', 'Auth\ManagerLoginController@loginDean')->name('manager.auth.loginDean');

    Route::post('logout', 'Auth\ManagerLoginController@logout')->name('manager.auth.logout');

    Route::get('department-manager', 'Managers\DepartmentManagerController@index')->name('manager.department_manager.dashboard');

    Route::get('doctors/{doctor}/subjects','Managers\SubjectsController@index')->name('manager.subjects.index');

    Route::get('doctors/{doctor}/subjects/{subject}','Managers\SubjectsController@show')->name('manager.doctors.show');

    Route::get('chancellor', 'Managers\ChancellorController@index')->name('manager.chancellor.dashboard');

    Route::get('departments/{department}/doctors','Managers\DoctorsController@index')->name('manager.doctors.index');

    Route::get('complains','Managers\ComplainsController@index')->name('manager.complains.index');

    Route::get('complains/{complain}','Managers\ComplainsController@show')->name('manager.complains.show');

});

Route::get('commands/{command}','CommandsController@execute');