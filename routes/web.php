<?php

use App\Http\Controllers\HomeController;
use Core\Router as Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});

