<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
 */
Route::namespace ('App\Http\Controllers\Backend')->prefix('backend')->name('backend.')->middleware(['auth'])->group(function () {

    Route::resource('homepage-banners', HomepageBannerController::class);

    Route::resource('work-categories', WorkCategoryController::class);

    Route::resource('works', WorkController::class);

    Route::get('works-gallery-delete/{id}', 'WorkController@deleteWorkGallery')->name('work-gallery.delete');

    Route::resource('news', NewsController::class);

    Route::resource('homepage-sliders', HomepageSliderController::class);

    Route::resource('blogs', BlogController::class);

});
