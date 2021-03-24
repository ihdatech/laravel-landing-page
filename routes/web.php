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

Route::get('/databases', 'DatabasesController@getAll');
Route::get('/designs', 'DesignsController@getAll');
Route::get('/experiences', 'ExperiencesController@getAll');
Route::get('/frameworks', 'FrameworksController@getAll');
Route::get('/languages', 'LanguagesController@getAll');
Route::get('/profiles', 'ProfilesController@getAll');
Route::get('/softwares', 'SoftwaresController@getAll');

Route::get('/download', 'DownloadController@index');
Route::get('/resume', 'ResumeController@index');
