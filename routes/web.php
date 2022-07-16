<?php

use App\Http\Controllers\FriendController;
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
})->name('inicio');

Route::get('/agenda', function (){
    return view('agenda');
})->name('agenda');

Route::get('/vote-asi', function (){
    return view('vote_asi');
})->name('voteAsi');

Route::get('/friends', [FriendController::class, 'showFriends']);
