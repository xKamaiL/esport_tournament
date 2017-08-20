<?Php

Route::prefix('auth')->as("auth.")->group(function () {
    Auth::routes();
});