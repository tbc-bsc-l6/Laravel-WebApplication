<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LipstickController;

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

Route::get('/lipstick', [App\Http\Controllers\LipstickController::class, 'index']);

Route::get('/lipstick/create', [App\Http\Controllers\LipstickController::class, 'create']);

Route::post('/lipstick/store', [App\Http\Controllers\LipstickController::class, 'store']);


Route::get('/lipstick/edit{id}', [App\Http\Controllers\LipstickController::class, 'edit']);

Route::post('/lipstick/update{id}', [App\Http\Controllers\LipstickController::class, 'update']);
// Route::resource('lipstick','App\Http\Controllers\LipstickController');


// Route::post('/create', function() {
//     return view('lipstick.Create');
// });

