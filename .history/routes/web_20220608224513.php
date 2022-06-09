<?php

use App\Http\Controllers\AdminAdminController;
use App\Http\Controllers\DevenirDonneur;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomController;
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

Route::get('/', [WelcomController::class, 'store']);

Route::post('/admin', function () {
    return view('admin');
});
Route::middleware(['auth'])->group(function () {
    
    
});

Route::get('/devenir', [DevenirDonneur::class, 'store'])->name('devenir');

Route::get('/welcome',  [PostController::class, 'index'])->name('welcome');
Route::post('/welcome', [PostController::class, 'store'])->name('welcome');

 Route::middleware(['auth'])->group(function(){
    Route::resource('post', AdminAdminController::class);
 });

Route::resource('post', AdminAdminController::class);

 Route::post('alerte', [AdminAdminController::class, 'store']);
 Route::get('alerte', [AdminAdminController::class, 'store']);

 Route::get('A-propos-de-nous', [DevenirDonneur::class, 'Apropos'])->name('Apropos');
 Route::get('contact', [DevenirDonneur::class, 'contact'])->name('contact');
 Route::post('contact', [DevenirDonneur::class, 'contact'])->name('contact');
