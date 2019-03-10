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
Route::get('/', 'PersonController@getPeople');

Route::get('/detailedperson/{id}', 'PersonController@show');
Route::get('/editperson/{id}', 'PersonController@edit');

Route::get('/addperson', 'PagesController@getAddPerson');
Route::post('/addPerson/submitNewPerson', 'PersonController@submitNewPerson');