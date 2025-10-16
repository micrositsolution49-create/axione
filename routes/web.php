<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/contact-us', [PageController::class, 'contact']);
Route::get('/faqs', [PageController::class, 'faqs']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/seo', [PageController::class, 'seo']);
Route::get('/smm', [PageController::class, 'smm']);
Route::get('/graphics-designing', [PageController::class, 'graphicsDesigning']);
Route::get('/web-designing', [PageController::class, 'webDesigning']);
Route::get('/web-development', [PageController::class, 'webDevelopment']);
Route::get('/google-ads', [PageController::class, 'googleAds']);
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy']);
Route::get('/terms-and-conditions', [PageController::class, 'termsandConditions']);

