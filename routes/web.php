<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hello', function () {
//    return view('hello', ['name' => 'Caroline' , 'books' =>['el7ob elmo7arer  mot foq alnile  elwsada el5alia']]);
//});
use App\Http\Controllers\PostController;
Route::get('/posts', [PostController:: class, 'index']);
Route::get('/posts/{Post}', [PostController:: class, 'show'])->name('post.show');
