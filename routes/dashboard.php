<?php

use App\Http\Controllers\Dashboard\V1\Admin\ContactController;
use App\Http\Controllers\Dashboard\V1\Admin\AdminController;
use App\Http\Controllers\Dashboard\V1\Admin\IndexController;
use App\Http\Controllers\Dashboard\V1\Admin\NewsController;
use App\Http\Controllers\Dashboard\V1\Admin\TopRankersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::prefix('admins')->middleware('isAdmin')->as('admins.')->group(function () {
    Route::get('', [IndexController::class, 'index'])->name('index');
    Route::Resource('news', NewsController::class);
    Route::Resource('admin', AdminController::class);
    Route::Resource('topRanker', TopRankersController::class);
    Route::Resource('contact', ContactController::class)->only([
        'index', 'destroy'
    ]);
});
