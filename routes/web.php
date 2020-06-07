<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('newsletter', [HomeController::class, 'newsletter'])->name('newsletter');

Route::group(['prefix' => 'blog'], static function () {
    Route::get('{id}-{slug}', [BlogController::class, 'show'])->name('blog.show');
});

Route::group(['prefix' => 'admin'], static function () {
    Route::match(['GET', 'POST'],'login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'auth:admin'], static function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    });
});
