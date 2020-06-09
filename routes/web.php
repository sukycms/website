<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('newsletter', [HomeController::class, 'newsletter'])->name('newsletter');

Route::group(['prefix' => 'blog'], static function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('{id}-{slug}', [BlogController::class, 'show'])->name('blog.show');
});

Route::group(['prefix' => 'admin'], static function () {
    Route::match(['GET', 'POST'],'login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'auth:admin'], static function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/newsletter', [DashboardController::class, 'newsletter'])->name('admin.newsletter');
        Route::resource('blog', 'Admin\BlogController')->names('admin.blog');
    });
});

/**
 * VENDOR
 */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
