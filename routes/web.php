<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
Route::get('/','showHome')->name('home');
Route::get('/user/{id}','showUser')->name('users');
Route::get('/blog','showBlog')->name('blog');
});

Route::get('/test', TestController::class);