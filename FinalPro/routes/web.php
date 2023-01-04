<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);


Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store']);


Route::get('/product/edit{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::put('/product/update{id}', [App\Http\Controllers\ProductController::class, 'update']);

Route::delete('/product/delete{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

Route::get('/product/show{id}', [App\Http\Controllers\ProductController::class, 'show']);

Route::get('/product/search{query}', [App\Http\Controllers\ProductController::class, 'search']);









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




