<?php
Route::get('/', 'HomeController@index')->name("index");
Route::get('/home', 'HomeController@index')->name('home');