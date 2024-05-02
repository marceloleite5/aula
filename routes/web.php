<?php

use App\Http\Controllers\FeedBackController;
use App\Models\FeedBack;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feeds', [FeedBackController::class, 'index'])->name('feeds.index');
Route::post('/feeds', [FeedBackController::class, 'store'])->name('feeds.store');
