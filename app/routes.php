<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Login page
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::post('/login', ['as' => 'home.login', 'uses' => 'SessionsController@login']);
Route::get('/logout', ['as' => 'home.logout', 'uses' => 'SessionsController@logout']);

// Admin controllers
Route::group(['before' => 'auth|hasRole:admin', 'prefix' => 'admin'], function() {
	// Admin controller
	Route::get('/', ['as' => 'users.dashboard', 'uses' => 'AdminController@index']);

	// Users management
	Route::resource('users', 'UsersController');

	// Departments management
	Route::resource('departments', 'DepartmentsController');

	// Celebrations management
	Route::resource('events', 'CelebrationsController');

    // Job Vacancies management
    Route::resource('jobvacancies', 'JobvacanciesController');

    // Audit Trail management
    Route::resource('logs', 'LogsController');
});

// Employee
Route::group(['before' => 'auth|hasRole:employee', 'prefix' => 'employees'], function() {
	// Users_Bios management
	Route::resource('bios', 'UsersBiosController');
	// Users_Spouses management
	Route::resource('spouses', 'UsersSpousesController');
	// Users_Childrens management
	Route::resource('childrens', 'UsersChildrensController');
	// Users_Educations management
	Route::resource('educations', 'UsersEducationsController');
	// Users_CivilServices management
	Route::resource('civil-services', 'UsersCivilServicesController');
	// Users_WorkExperience management
	Route::resource('work-experiences', 'UsersWorkExperiencesController');
	// Users_VoluntaryWork management
	Route::resource('voluntary-works', 'UsersVoluntaryWorksController');
	// Users_Trainings management
	Route::resource('trainings', 'UsersTrainingsController');
	// Users_Hobbies management
	Route::resource('hobbies', 'UsersHobbiesController');
	// Users_Recognitions management
	Route::resource('recognitions', 'UsersRecognitionsController');
	// Users_Organiations management
	Route::resource('organizations', 'UsersOrganizationsController');
	// Users_Questionaire management
	Route::resource('questionaires', 'UsersQuestionairesController');
	// Users_References management
	Route::resource('references', 'UsersReferencesController');

	// Users_Accomplishments management
	Route::resource('accomplishments', 'UsersAccomplishmentsController');
});