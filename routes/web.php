<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes.
|--------------------------------------------------------------------------
|
 */

foreach (glob(__DIR__ . '/frontend/*.php') as $frontendRoute) {
    require $frontendRoute;
}

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
 */

Route::namespace ('App\Http\Controllers\Backend')->prefix('backend')->name('backend.')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

});

require __DIR__ . '/auth.php';

foreach (glob(__DIR__ . '/backend/*.php') as $backendRoute) {
    require $backendRoute;
}
