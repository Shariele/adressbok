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
Route::get('/editperson/{id}', 'PersonController@editPerson');

Route::get('/addperson', 'PagesController@getAddPerson');

Route::post('/detailedPerson/deletePerson', 'PersonController@deletePerson');
Route::post('/detailedPerson/submitEditedPerson', 'PersonController@submitEditedPerson');
Route::post('/addPerson/submitNewPerson', 'PersonController@submitNewPerson');