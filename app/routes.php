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

// Admin controllers
Route::group(['before' => 'auth|hasRole:admin', 'prefix' => 'admin'], function() {
	// Admin controller
	Route::get('/', ['as' => 'users.dashboard', 'uses' => 'AdminController@index']);

	// Users management
	Route::resource('users', 'UsersController');

	// Departments management
	Route::resource('departments', 'DepartmentsController');
});

Route::group(['before' => 'auth|hasRole:employee', 'prefix' => 'employee'], function() {
	// Users_Bios management
	Route::resource('usersBios', 'UsersBiosController');
	// Users_Spouses management
	Route::resource('usersSpouses', 'UsersSpousesController');
	// Users_Childrens management
	Route::resource('usersChildrens', 'UsersChildrensController');
	// Users_Educations anagement
	Route::resource('usersEducations', 'UsersEducationsController');
});