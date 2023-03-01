<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('comics', ComicController::class);

// Route::get('/comics/{id}', [ComicController::class, 'show'])->name('detail_comic');

// Route::get('/comics', [ComicController::class, 'index'])->name('comics');


Route::get('/characters', function () {

    return view('characters', compact('menu'));
})->name('characters');

Route::get('/movies', function () {

    return view('movies', compact('menu'));
})->name('movies');

Route::get('/tv', function () {

    return view('tv', compact('menu'));
})->name('tv');

Route::get('/games', function () {

    return view('games', compact('menu'));
})->name('games');

Route::get('/collectibles', function () {

    return view('collectibles', compact('menu'));
})->name('collectibles');

Route::get('/videos', function () {

    return view('videos', compact('menu'));
})->name('videos');

Route::get('/fans', function () {

    return view('fans', compact('menu'));
})->name('fans');

Route::get('/news', function () {

    return view('news', compact('menu'));
})->name('news');

Route::get('/shop', function () {

    return view('shop', compact('menu'));
})->name('shop');

