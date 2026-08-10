<?php

use App\Http\Controllers\Home\ArticleController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\IndexController;
use App\Http\Controllers\Home\OrderController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\Home\QuestionController;
use App\Http\Controllers\Home\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes (heavyaway - converted to FQCN)
|--------------------------------------------------------------------------
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/test', [TestController::class, 'index']);
Route::get('/check', [OrderController::class, 'query']);

// Admin login routes (GET/POST login handled by Admin\LoginController, overrides Filament default)
Route::prefix(env('ADMIN_PATH', 'ami3-17drt4-6ne634russ'))->group(function () {
    Route::get('/login', [\App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])
        ->name('filament.' . env('ADMIN_PATH', 'ami3-17drt4-6ne634russ') . '.auth.login');
    Route::post('/login', [\App\Http\Controllers\Admin\LoginController::class, 'login'])
        ->name('admin.login.submit');
    Route::post('/logout', [\App\Http\Controllers\Admin\LoginController::class, 'logout'])
        ->name('filament.' . env('ADMIN_PATH', 'ami3-17drt4-6ne634russ') . '.auth.logout');
});

Route::prefix('article')->group(function () {
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('/{id}', [ArticleController::class, 'show']);
});

Route::prefix('question')->group(function () {
    Route::get('/', [QuestionController::class, 'index']);
    Route::get('/{id}', [QuestionController::class, 'show']);
    Route::post('/like/{id}', [QuestionController::class, 'like']);
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/get/adjacent', [ProductController::class, 'getAdjacentGoods']);
    Route::get('/{id}', [ProductController::class, 'show']);
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index']);
    Route::post('/', [ContactController::class, 'store'])->middleware('throttle:3,1');
});

Route::prefix('order')->group(function () {
    Route::get('/query', [OrderController::class, 'query']);
    Route::get('/place/{id}', [OrderController::class, 'place']);
    Route::get('/{id}', [OrderController::class, 'show']);
    Route::post('/{id}', [OrderController::class, 'store'])->middleware('throttle:3,1');
});
