<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;



//To apply rate limitting
Route::middleware('throttle:2,1')->group(function () {
    Route::get('/author',[AuthorController::class, 'index']);
});

//To apply rate limitting
Route::middleware('throttle:ratelimit')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::get('/ninja', function () {
        return view('ninjas.index');
})->middleware('throttle:login');

