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
Route::post('/register', ['as' => 'home.register', 'uses' => 'SessionsController@register']);
Route::get('/logout', ['as' => 'home.logout', 'uses' => 'SessionsController@logout']);

// Admin controllers
Route::group(['before' => 'auth|hasRole:admin', 'prefix' => 'admin'], function() {
	// Admin controller
	Route::get('/', ['as' => 'users.dashboard', 'uses' => 'AdminController@index']);

	// Users management
	Route::resource('users', 'UsersController');
    Route::get('users/{id}/unlock', ['as' => 'admin.users.unlock', 'uses' => 'UsersController@unLock']);
    Route::get('users/{id}/lock', ['as' => 'admin.users.lock', 'uses' => 'UsersController@lock']);

	// Departments management
	Route::resource('departments', 'DepartmentsController');

	// Celebrations management
	Route::resource('events', 'CelebrationsController');

    // Job Vacancies management
    Route::resource('jobvacancies', 'JobvacanciesController');

    // Audit Trail management
    Route::resource('logs', 'LogsController');

    // Evaluations management
    Route::resource('evaluations', 'LogsController');
});

// Employee
Route::group(['before' => 'auth|hasRole:employee', 'prefix' => 'employees'], function() {
	Route::get('/', ['uses' => 'EmployeesController@index']);

	// Users_Bios management
	Route::resource('pds/bios', 'UsersBiosController');
	// Users_Spouses management
	Route::resource('pds/spouses', 'UsersSpousesController');
	// Users_Childrens management
	Route::resource('pds/childrens', 'UsersChildrensController');
	// Users_Educations management
	Route::resource('pds/educations', 'UsersEducationsController');
	// Users_CivilServices management
	Route::resource('pds/civil-services', 'UsersCivilServicesController');
	// Users_WorkExperience management
	Route::resource('pds/work-experiences', 'UsersWorkExperiencesController');
	// Users_VoluntaryWork management
	Route::resource('pds/voluntary-works', 'UsersVoluntaryWorksController');
	// Users_Trainings management
	Route::resource('pds/trainings', 'UsersTrainingsController');
	// Users_Hobbies management
	Route::resource('pds/hobbies', 'UsersHobbiesController');
	// Users_Recognitions management
	Route::resource('pds/recognitions', 'UsersRecognitionsController');
	// Users_Organiations management
	Route::resource('pds/organizations', 'UsersOrganizationsController');
	// Users_Questionaire management
	Route::resource('pds/questionaires', 'UsersQuestionairesController');
	// Users_References management
	Route::resource('pds/references', 'UsersReferencesController');

	// Users_Accomplishments management
	Route::resource('accomplishments', 'UsersAccomplishmentsController');
});

Route::group(['before' => 'auth|hasRole:supervisor', 'prefix' => 'supervisors'], function() {
	Route::get('/', ['uses' => 'SupervisorsController@index']);

});