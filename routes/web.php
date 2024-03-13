<?php

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

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('movies', function () {
    $movies = config('comics');
    // dd($movies);
    return view('movies', compact('movies'));
})->name('movies');

Route::get('comics/{index}', function ($index) {
    $movies = config('comics');
    $movie = $movies[$index];
    // dd($movie);

    return view('comics', compact('movie'));
})->name('comics');
