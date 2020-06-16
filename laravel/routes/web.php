<?php

use Illuminate\Support\Facades\Route;


Route::get('/allDogs', 'CaniController@index')->name('output');

Route::get('/singleDog/{id}', 'CaniController@showDogs')->name('singledog');
