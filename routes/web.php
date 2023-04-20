<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/profiles/create', function () {
    return view('create-profile');
});


Route::get('/profiles/', [ProfileController::class, 'index']);

Route::get('/posts/', [PostController::class, 'index']);
Route::get('/posts/{post:id}', [PostController::class, 'show']);
Route::post('/posts/{post:id}/comments', [CommentController::class, 'store']);
