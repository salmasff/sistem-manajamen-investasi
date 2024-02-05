<?php

use App\Http\Controllers\ProfileController;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/investasi', 'App\Http\Controllers\InvestasiController@index')->middleware(['auth', 'verified'])->name('home');
Route::get('/investasi/tambah','App\Http\Controllers\InvestasiController@create')->middleware(['auth', 'verified'])->name('tambah');
Route::post('/investasi/store','App\Http\Controllers\InvestasiController@store')->middleware(['auth', 'verified'])->name('tambah2');
Route::get('/investasi/edit/{id}','App\Http\Controllers\InvestasiController@edit')->middleware(['auth', 'verified'])->name('edit');

require __DIR__.'/auth.php';
