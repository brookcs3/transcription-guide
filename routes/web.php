<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ReviewController;

// Main pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/test', [PageController::class, 'test'])->name('test');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
Route::get('/comparisons', [PageController::class, 'comparisons'])->name('comparisons');
Route::get('/guides', [PageController::class, 'guides'])->name('guides');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

// Guide pages
Route::get('/guides/{slug}', [GuideController::class, 'show'])->name('guide.show');

// Comparison pages
Route::get('/comparisons/{slug}', [PageController::class, 'comparison'])->name('comparison.show');

// Reviews (individual review articles)
Route::get('/reviews/{slug}', [ReviewController::class, 'show'])->name('review.show');

// Chinese (zh) pages
Route::prefix('zh')->name('zh.')->group(function () {
    Route::get('/', [PageController::class, 'homeZh'])->name('home');
    Route::get('/reviews', [PageController::class, 'reviewsZh'])->name('reviews');
    Route::get('/reviews/{slug}', [ReviewController::class, 'showZh'])->name('reviews.show');
    Route::get('/comparisons', [PageController::class, 'comparisonsZh'])->name('comparisons');
    Route::get('/comparisons/{slug}', [PageController::class, 'comparisonZh'])->name('comparison.show');
    Route::get('/guides', [PageController::class, 'guidesZh'])->name('guides');
    Route::get('/guides/{slug}', [GuideController::class, 'showZh'])->name('guides.show');
    Route::get('/about', [PageController::class, 'aboutZh'])->name('about');
    Route::get('/contact', [PageController::class, 'contactZh'])->name('contact');
});
