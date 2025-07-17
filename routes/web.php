<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Models\Book;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/book-create', function () {
    return view('book-create');
})->middleware('throttle:login')->name('bookcreate');


Route::get('/book-list', function () {
    return view('book-list');
})->middleware('throttle:login')->name('booklist');

//To apply rate limitting
Route::middleware('throttle:2,1')->group(function () {
    Route::get('/author',[AuthorController::class, 'index']);
});
