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

    Route::get('login', 'Auth\ManagerLoginController@login')->name('manager.auth.login');

    Route::post('login', 'Auth\ManagerLoginController@loginAdmin')->name('manager.auth.loginAdmin');

    Route::post('logout', 'Auth\ManagerLoginController@logout')->name('manager.auth.logout');

    Route::get('/department-manager', 'Managers\DepartmentManagerController@index')->name('manager.department_manager.dashboard');

    Route::get('doctors/{doctor}/subjects','Managers\SubjectsController@index')->name('manager.subjects.index');

    Route::get('doctors/{doctor}/subjects/{subject}','Managers\SubjectsController@show')->name('manager.doctors.show');

    Route::get('/chancellor', 'Managers\ChancellorController@index')->name('manager.chancellor.dashboard');

    Route::get('departments/{department}/doctors','Managers\DoctorsController@index')->name('manager.doctors.index');


    //    Route::get('dashboard', 'MangerController@index')->name('manager.dashboard');

    //    Route::get('register', 'AdminController@create')->name('manager.register');

    //    Route::post('register', 'AdminController@store')->name('manager.register.store');


});
