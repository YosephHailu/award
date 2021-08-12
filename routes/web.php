<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\AwardTypeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieVoteController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\MusicVoteController;
use App\Http\Controllers\UserController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');

Auth::routes();

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, "logout"])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::resource('music', MusicController::class);
Route::get('music/{music}/castVote', [MusicVoteController::class, 'castVote'])->name('music-cast-vote');

Route::resource('movie', MovieController::class);
Route::get('movie/{movie}/castVote', [MovieVoteController::class, 'castVote'])->name('music-cast-vote');
Route::get('users', [UserController::class, 'index']);
Route::get('updateUserStatus/{user}', [UserController::class, 'updateStatus']);
Route::get('updateAllUserStatus', [UserController::class, 'updateAllUserStatus']);
Route::get('grading', [AwardController::class, 'grading']);
