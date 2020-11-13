<?php

use App\Http\Livewire\{ShowTweets};
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UploadPhoto;

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

Route::get('/upload', UploadPhoto::class)->name('upload.photo.user');
Route::get('/tweets', ShowTweets::class)
    ->name('tweets.index')
    ->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
