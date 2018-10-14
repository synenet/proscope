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
})->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/project','ProjectController@index')->name('project.index');
Route::get('/project/create','ProjectController@create')->name('project.create');
Route::POST('/project/store','ProjectController@store')->name('project.store');
Route::GET('/project/show/{id}','ProjectController@show')->name('project.show');
Route::POST('/timeline/store','TimelineController@store')->name('timeline.store');
Route::GET('/project/team','ProjectTeamController@index')->name('team.index');
Route::GET('/project/team/join','ProjectTeamController@join')->name('team.join');
Route::POST('/project/join','ProjectTeamController@store')->name('join.team');

Route::GET('/project/myteam','TeamController@index')->name('myteam.index');
Route::GET('/project/myteam/create','TeamController@create')->name('myteam.create');
Route::POST('/project/myteam/store','TeamController@store')->name('myteam.store');

Route::GET('/profile','ProfileController@index')->name('profile.index');
Route::POST('profile/store', 'ProfileController@store')->name('profile.store');

Route::GET('/search','SearchController@search');