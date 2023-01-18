<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

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
Route::post('/newsletter', function(){
    request()->validate(['email'=> 'required|email']);
    
$mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
	'apiKey' => config('services.mailchimp.key'),
	'server' => 'us11'
]);

try{
    $response = $mailchimp->lists->addListMember('8128d2b0c8',[
        'email_address' => request('email'),
        'status' => 'subscribed'
    ]);
}catch(\Exception $e){
    return redirect('/')
    ->with('error', 'Your email address is not valid!.');
}

return redirect('/')
    ->with('success', 'You are now susbscrbed to our sales daily.');
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->middleware('auth');

Route::get('/productguest', [App\Http\Controllers\ProductController::class, 'index2']);



Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->middleware('auth');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store']);


Route::get('/product/edit{id}', [App\Http\Controllers\ProductController::class, 'edit'])->middleware('auth');
Route::put('/product/update{id}', [App\Http\Controllers\ProductController::class, 'update']);

Route::delete('/product/delete{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

Route::get('/product/show{id}', [App\Http\Controllers\ProductController::class, 'show'])->middleware('auth');

Route::get('/product/search{query}', [App\Http\Controllers\ProductController::class, 'search']);


Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->middleware('admin');
Route::get('/users/editusers{id}', [App\Http\Controllers\UserController::class, 'edit'])->middleware('admin');
Route::put('/users/update{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->middleware('admin');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store']);
Route::delete('/users/delete{id}', [App\Http\Controllers\UserController::class, 'destroy']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




