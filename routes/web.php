<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;


Route::get('/', function () {
    return view('ninjas.index');
});
//To apply rate limitting
Route::middleware('throttle:2,1')->group(function () {
    Route::get('/author',[AuthorController::class, 'index']);
});


Route::get('/ninja', function () {
        return view('ninjas.index');
})->middleware('throttle:login');

