<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\PagesController;
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

Route::middleware(['visitor'])->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/', 'index')->name('home.page');
        Route::get('/about', 'about')->name('about.page');
        Route::get('/rooms', 'rooms')->name('rooms.page');
        Route::get('/gallery', 'gallery')->name('gallery.page');
        Route::get('/events', 'events')->name('events.page');
        Route::get('/contact', 'contact')->name('contact.page');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog/{slug}', 'show')->name('read_blog');
    });
});
