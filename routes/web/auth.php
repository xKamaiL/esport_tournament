<?Php

Route::prefix('auth')->as("auth.")->middleware('guest')->group(function () {
    Route::get('login', 'HomeController@index')->name("login");
});