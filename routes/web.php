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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile',[App\Http\Controllers\HomeController::class,'profile']);

Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index']);

Route::get('/transactions/create', [App\Http\Controllers\TransactionController::class, 'create']);
Route::post('/transactions/create', [App\Http\Controllers\TransactionController::class, 'store']);

Route::get('/transactions/{transaction}', [App\Http\Controllers\TransactionController::class, 'show']);

Route::get('/transactions/{transaction}/edit', [App\Http\Controllers\TransactionController::class, 'edit']);
Route::post('/transactions/{transaction}/edit', [App\Http\Controllers\TransactionController::class, 'update']);

Route::get('/transactions/{transaction}/destroy', [App\Http\Controllers\TransactionController::class, 'destroy']);