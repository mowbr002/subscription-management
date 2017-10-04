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
    return view('welcome.splash');
});

Route::get('user/{id}', 'UserController@show')->middleware('roles');
	//return view('dashboards.user');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Any routes that should not be
 * publicly available should be declared
 * here using: 'middleware' => 'auth']
 */

Route::get('/associations/add', 'AddAssociationController@showAddScreen');
Route::get('/associations/list', 'GetAssociationController@showAll');
Route::get('/associations/association/{aid}', 'GetAssociationController@show');
Route::get('/admin', 'AdminController@showAdminScreen');
Route::get('functions/add', 'FunctionsController@showAddScreen');

Route::post('associations/add', 'AddAssociationController@store');
















