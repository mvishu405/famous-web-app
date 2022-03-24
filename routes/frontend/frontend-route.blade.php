<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Frontend')
    ->name('frontend.')
    ->group(function () {
        Route::get('/', 'FrontendConroller@index')->name('homepage');
        Route::get('news', 'NewsController@index')->name('news.index');
        Route::get('blogs', 'BlogController@index')->name('blogs.index');
        Route::get('blogs/{slug}', 'BlogController@show')->name('blogs.inside');
    });
