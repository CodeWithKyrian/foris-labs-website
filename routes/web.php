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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/privacy-policy', function () { return view('privacy'); })->name('privacy-policy');
Route::get('/terms-of-use', function () { return view('terms'); })->name('terms');
Route::get('/contact-us', function () { return view('contact'); })->name('contact-us');
Route::get('/simulations', function () { return view('simulations'); })->name('simulations');
Route::get('/pricing', function () { return view('pricing'); })->name('pricing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
