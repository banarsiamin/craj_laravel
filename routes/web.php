<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page and static pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aims-scope', [HomeController::class, 'aimsScope'])->name('aims-scope');
Route::get('/current', [HomeController::class, 'current'])->name('current');
Route::get('/archive', [HomeController::class, 'archive'])->name('archive');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Article routes
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article.detail');

// Article submission
Route::get('/submit-article', [ArticleController::class, 'create'])->name('article.submit');
Route::post('/submit-article', [ArticleController::class, 'store'])->name('article.store');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest routes
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login']);
    });

    // Protected routes
    Route::middleware('admin')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    });
});
