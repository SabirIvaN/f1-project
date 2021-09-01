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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'show'])->name('welcome.show');

Route::get('/contacts', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::get('/orders/create/{id}', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');

Route::post('/orders/store', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
