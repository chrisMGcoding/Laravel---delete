<?php

use App\Http\Controllers\AllMemberController;
use App\Http\Controllers\MenMemberController;
use App\Http\Controllers\WomenMemberController;
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

// READ
Route::get('/', [AllMemberController::class, 'index'])->name('allMember');
Route::get('/men', [MenMemberController::class, 'index'])->name('men');
Route::get('/women', [WomenMemberController::class, 'index'])->name('women');

// CREATE 
Route::get('/members/create', [AllMemberController::class, 'create'])->name('createMembers');

/*STORE*/
Route::post('/members', [AllMemberController::class, 'store'])->name('store');

