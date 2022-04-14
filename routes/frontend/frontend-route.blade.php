<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Frontend')
    ->name('frontend.')
    ->group(function () {
        Route::get('/', 'FrontendConroller@index')->name('homepage');
        Route::view('about', 'frontend.pages.about')->name('about.index');
        Route::get('news', 'NewsController@index')->name('news.index');
        Route::get('blogs', 'BlogController@index')->name('blogs.index');
        Route::get('blogs/{slug}', 'BlogController@show')->name('blogs.inside');
        Route::get('works', 'WorkController@index')->name('works.index');
        Route::get('works/{slug}', 'WorkController@show')->name('works.show');
        Route::view('career', 'frontend.pages.career')->name('career.index');
        Route::post('career', 'FrontendConroller@storeCareer')->name('career.post');
        Route::view('contact', 'frontend.pages.contact')->name('contact.index');
        Route::post('contact', 'FrontendConroller@storeContact')->name('contact.post');

        //-------
        Route::view('production', 'frontend.pages.production')->name('service.production');
        Route::view('specialized-production', 'frontend.pages.specialized-production')->name('service.specialized-production');
        Route::view('post-production', 'frontend.pages.post-production')->name('service.post-production');
        Route::view('fhoa', 'frontend.pages.fhoa')->name('service.fhoa');
        Route::view('shooting-event-floor', 'frontend.pages.shooting-event-floor')->name('service.shooting-event-floor');
        Route::view('ready-to-shoot', 'frontend.pages.ready-to-shoot')->name('service.ready-to-shoot');
        Route::view('fwc', 'frontend.pages.fwc')->name('service.fwc');
        Route::view('csr', 'frontend.pages.csr')->name('csr');
    });
