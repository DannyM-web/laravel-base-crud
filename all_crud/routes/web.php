<?php

use Illuminate\Support\Facades\Route;

//show all elements
Route::get('/', 'OminiController@index' ) -> name('home');
// show single element by id
Route::get('/showPerson/{id}', 'OminiController@show' ) -> name('show');
// delete element by id
Route::get('/deletePerson/{id}', 'OminiController@delete' ) -> name('delete');
// create element page
Route::get('/createPerson', 'OminiController@create' ) -> name('create');
// store the element created
Route::post('/store', 'OminiController@store' ) -> name('store');
// edit element by id page
Route::get('/edit/{id}', 'OminiController@edit' ) -> name('edit');
//update the element edited by id
Route::post('/update/{id}', 'OminiController@update' ) -> name('update');
