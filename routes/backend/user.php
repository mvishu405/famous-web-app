<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Backend User Routes
|--------------------------------------------------------------------------
|
*/
Route::namespace('App\Http\Controllers\Backend')->prefix('backend')->name('backend.')->middleware(['auth'])->group(function () {

    Route::resource('/users', 'UserController')->only([
        'index', 'edit', 'update'
    ]);

});