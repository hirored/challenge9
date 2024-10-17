<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [App\Http\Controllers\ArticleController::class, 'showList'])->name('list');