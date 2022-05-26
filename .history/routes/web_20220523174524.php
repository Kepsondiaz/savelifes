<?php

use App\Http\Controllers\DevenirDonneur;
use App\Http\Controllers\PostController;
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

Route::get('/devenir', [DevenirDonneur::class, 'store'])->name('devenir');

Route::get('/welcome', 'PostController@index')->name('welcome');
Route::post('/welcome', 'PostController@s')->name('welcome');

