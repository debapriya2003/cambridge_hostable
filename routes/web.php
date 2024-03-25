<?php

use Illuminate\Support\Facades\Route;


Route::as('frontend.')->group(function () {
    Route::get('/', [App\Http\Controllers\Frontend\V1\PagesController::class, 'index'])->name('index');
    Route::get('/contact-us', [App\Http\Controllers\Frontend\V1\PagesController::class, 'contactUs'])->name('contact_us');
    Route::get('/admission-procedure', [App\Http\Controllers\Frontend\V1\PagesController::class, 'admissionProcedure'])->name('admission_procedure');
    Route::get('/affiliation', [App\Http\Controllers\Frontend\V1\PagesController::class, 'affiliation'])->name('affiliation');
    Route::get('/gallery', [App\Http\Controllers\Frontend\V1\PagesController::class, 'galleryPhotos'])->name('gallery_photos');
    Route::get('/general-rules', [App\Http\Controllers\Frontend\V1\PagesController::class, 'generalRules'])->name('general_rules');
    Route::get('/vision-missions', [App\Http\Controllers\Frontend\V1\PagesController::class, 'visionMission'])->name('vision_mission');

    Route::post('/contact/store', [App\Http\Controllers\Frontend\V1\ContactController::class, 'store'])->name('contact.store');
});
