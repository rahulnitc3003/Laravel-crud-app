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

Route::get('/', 'CreateController@index');
Route::get('/create', function () {
    return view('create');
});

Route::post('/create', 'CreateController@store');

Route::get('/project/{id}', 'CreateController@viewProject');
Route::get('/update/{id}', 'CreateController@updateViewProject');
Route::post('/update/{id}', 'CreateController@updateProject');
Route::get('/delete/{id}', 'CreateController@deleteProject');
