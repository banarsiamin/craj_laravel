<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\SubjectAreaController;
use App\Http\Controllers\Admin\IssueController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JournalIndexingController;

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

// Contact routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Article routes
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article.detail');
Route::post('/articles/{article}/like', [ArticleController::class, 'like'])->name('article.like');
Route::get('/articles/{article}/abstract', [ArticleController::class, 'showAbstract'])->name('article.showAbstract');

// Article submission
Route::get('/submit-article', [ArticleController::class, 'create'])->name('article.submit');
Route::post('/submit-article', [ArticleController::class, 'store'])->name('article.store');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest routes
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    // Protected routes
    Route::middleware(AdminMiddleware::class)->group(function () {
        Route::get('/', function() {
            return view('admin.dashboard');
        })->name('dashboard');
        Route::get('/dashboard', function() {
            return view('admin.dashboard');
        })->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        
        // Settings Routes
        Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
        Route::post('/settings/general', [App\Http\Controllers\Admin\SettingsController::class, 'saveGeneral'])->name('settings.save-general');
        Route::post('/settings/smtp', [App\Http\Controllers\Admin\SettingsController::class, 'saveSmtp'])->name('settings.save-smtp');
        
        // Article Management Routes
        Route::resource('articles', AdminArticleController::class);
        
        // Subject Area Management Routes
        Route::resource('subject-areas', SubjectAreaController::class);

        // Issues Management Routes
        Route::resource('issues', IssueController::class);

        // Journal Indexing Management Routes
        Route::resource('journal-indexing', JournalIndexingController::class);

        // Admin Editorial Board routes
        // Route::middleware(['auth', 'admin'])->group(function () {
            Route::resource('editorial-board', App\Http\Controllers\Admin\EditorialBoardController::class);
            Route::get('editorial-board-pending', [App\Http\Controllers\Admin\EditorialBoardController::class, 'pendingRegistrations'])->name('editorial-board.pending');
            Route::patch('editorial-board/{editorialBoard}/approve', [App\Http\Controllers\Admin\EditorialBoardController::class, 'approve'])->name('editorial-board.approve');
            Route::patch('editorial-board/{editorialBoard}/reject', [App\Http\Controllers\Admin\EditorialBoardController::class, 'reject'])->name('editorial-board.reject');
        // });
    });
});

// Frontend Editorial Board routes
Route::get('/editorial-board', [App\Http\Controllers\Editorial\BoardController::class, 'index'])->name('editorial-board');

// Editorial Board Registration routes
Route::get('/editorial-board/register', [App\Http\Controllers\Editorial\RegistrationController::class, 'showForm'])->name('editorial-board.registration');
Route::post('/editorial-board/register', [App\Http\Controllers\Editorial\RegistrationController::class, 'register'])->name('editorial-board.registration.submit');
Route::get('/editorial-board/thank-you', [App\Http\Controllers\Editorial\RegistrationController::class, 'thankYou'])->name('editorial-board.registration.thank-you');

// This route must come after the specific routes above
Route::get('/editorial-board/{member}', [App\Http\Controllers\Editorial\BoardController::class, 'show'])->name('editorial-board.member');
