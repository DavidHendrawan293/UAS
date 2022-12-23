<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [AppController::class, 'index']);

Route::get('/accounts/index', [AccountController::class, 'index']);
Route::get('/accounts/create', [AccountController::class, 'create']);
Route::get('/accounts/store', [AccountController::class, 'store']);
Route::get('/accounts/show', [AccountController::class, 'show']);
Route::get('/accounts/edit', [AccountController::class, 'edit']);
Route::get('/accounts/update', [AccountController::class, 'update']);
Route::get('/accounts/destroy', [AccountController::class, 'destroy']);

Route::resource('accounts', AccountController::class);

Route::get('/transactions/index', [TransactionController::class, 'index']);
Route::get('/transactions/create', [TransactionController::class, 'create']);
Route::get('/transactions/store', [TransactionController::class, 'store']);
Route::get('/transactions/show', [TransactionController::class, 'show']);
Route::get('/transactions/edit', [TransactionController::class, 'edit']);
Route::get('/transactions/update', [TransactionController::class, 'update']);
Route::get('/transactions/destroy', [TransactionController::class, 'destroy']);

Route::resource('transactions', TransactionController::class);
