<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Frontend')
    ->name('frontend.')
    ->group(function () {
        Route::get('/', 'FrontendConroller@index')->name('homepage');
    });
