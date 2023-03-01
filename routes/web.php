<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

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

Route::get('/comics/{id}', [ComicController::class, 'show'])->name('detail_comic');


Route::get('/characters', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('characters', compact('menu'));
})->name('characters');

// Route::get('/comics', function () {

//     $menu = [
//         'COMICS' => '/comics',
//         'CHARACTERS' => '/characters',
//         'MOVIES' => '/movies',
//         'TV' => '/tv',
//         'GAMES' => '/games',
//         'COLLECTIBLES' => '/collectibles',
//         'CHARACTERS' => '/characters',
//         'VIDEOS' => '/videos',
//         'FANS' => '/fans',
//         'NEWS' => '/news',
//         'SHOP' => '/shop',
//     ];

//     $cards = config('comics');

//     return view('comics', compact('menu', 'cards'));
// })->name('comics');

Route::get('/comics', [ComicController::class, 'index'])->name('comics');

Route::get('/movies', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('movies', compact('menu'));
})->name('movies');

Route::get('/tv', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('tv', compact('menu'));
})->name('tv');

Route::get('/games', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('games', compact('menu'));
})->name('games');

Route::get('/collectibles', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('collectibles', compact('menu'));
})->name('collectibles');

Route::get('/videos', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('videos', compact('menu'));
})->name('videos');

Route::get('/fans', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('fans', compact('menu'));
})->name('fans');

Route::get('/news', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('news', compact('menu'));
})->name('news');

Route::get('/shop', function () {

    $menu = [
        'COMICS' => '/comics',
        'CHARACTERS' => '/characters',
        'MOVIES' => '/movies',
        'TV' => '/tv',
        'GAMES' => '/games',
        'COLLECTIBLES' => '/collectibles',
        'CHARACTERS' => '/characters',
        'VIDEOS' => '/videos',
        'FANS' => '/fans',
        'NEWS' => '/news',
        'SHOP' => '/shop',
    ];

    return view('shop', compact('menu'));
})->name('shop');

