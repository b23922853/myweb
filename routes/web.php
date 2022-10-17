<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
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

// 前台
Route::get('/', [FrontController::class, 'index']);
Route::get('/weather', [FrontController::class, 'weather']);
Route::get('/news', [FrontController::class, 'news']);

// 後台
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin/product', [ProductController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/admin/product/create', [ProductController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/admin/product/store', [ProductController::class, 'store'])->middleware(['auth', 'verified']);




require __DIR__.'/auth.php';
