<?php

use App\Http\Controllers\adminControllers\AdminContactRequestsController;
use App\Http\Controllers\adminControllers\AdminContactsController;
use App\Http\Controllers\adminControllers\AdminNewsCategoriesController;
use App\Http\Controllers\adminControllers\AdminNewsController;
use App\Http\Controllers\adminControllers\AdminServicesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

        Route::resource('news', AdminNewsController::class)->names('admin.news')
            ->except(['show']);

        Route::resource('services', AdminServicesController::class)->names('admin.services')
            ->only(['index', 'edit', 'update']);;

        Route::resource('news-categories', AdminNewsCategoriesController::class)->names('admin.news-categories')
            ->except(['show']);

        Route::resource('contacts', AdminContactsController::class)->names('admin.contacts')
            ->except(['show']);

        Route::resource('contact-requests', AdminContactRequestsController::class)->names('admin.contact-requests')
            ->only(['index', 'destroy']);
        Route::post(
            'contact-requests/{request}/mark-as-processed',
            [AdminContactRequestsController::class, 'markAsProcessed']
        )
            ->name('admin.contact-requests.mark-as-processed');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contacts', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-request', [ContactRequestController::class, 'store'])->name('contact.request');


Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/category/{category}', [NewsController::class, 'byCategory'])->name('news.category');



Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->name('services.show')
    ->where('slug', 'fast-buildings|custom-production|design|repair');
