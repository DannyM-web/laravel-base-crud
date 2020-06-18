<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OminiController@index' ) -> name('home');
Route::get('/showPerson/{id}', 'OminiController@show' ) -> name('show');
Route::get('/deletePerson/{id}', 'OminiController@delete' ) -> name('delete');
Route::get('/createPerson', 'OminiController@create' ) -> name('create');
Route::post('/store', 'OminiController@store' ) -> name('store');

Route::get('/edit/{id}', 'OminiController@edit' ) -> name('edit');
Route::post('/update/{id}', 'OminiController@update' ) -> name('update');
