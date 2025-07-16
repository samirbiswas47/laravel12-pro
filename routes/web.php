<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Models\Book;

Route::get('/', function () {
    $books= Book::all();
    return view('ninjas.index', ["books"=>$books]);
})->name('dashboard');


Route::get('/ninja', function () {
    $books= Book::all();
    return view('ninjas.index', ["books"=>$books]);
})->middleware('throttle:login')->name('user');

//To apply rate limitting
Route::middleware('throttle:2,1')->group(function () {
    Route::get('/author',[AuthorController::class, 'index']);
});
