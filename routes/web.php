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


Route::prefix('page')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('posts', function () {
        return view('post');
    })->name('mypost');
    Route::get('/test', function () {
        return view('about');
    })->name('about');
    
});

Route::redirect('/about', '/test',301);

Route::fallback(function (){
    return "<h1>Page not found</h1>";
});










// Route::get('/post/first', function () {
//     return view('first-post');
    
// });

// Route::view('/post','post');

// Route::get('/hello', function () {
//     return view('post');
// });