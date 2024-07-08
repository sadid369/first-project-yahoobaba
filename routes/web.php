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
    return view('welcome');
});
Route::get('/post/{id}/c/{c}', function (string $id, string $c) {
    // return view('post');
    if($id){
     
        return "<h1>Post ID:".$id."</h1> <h2>comment ".$c."</h2> ";
    }else{
        return "<h1>No Id Found</h1>";

    }
    
    
})->whereNumber('id')->whereAlpha('c');
// })->where('id',"[0-9]+")->whereAlpha('c');
















// Route::get('/post/first', function () {
//     return view('first-post');
    
// });

// Route::view('/post','post');

// Route::get('/hello', function () {
//     return view('post');
// });