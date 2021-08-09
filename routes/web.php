<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::get('/privacy-policy', [HomeController::class, 'Privacy'])->name('privacy-policy');
Route::get('/terms-of-use', [HomeController::class, 'Terms'])->name('terms');
Route::get('/contact-us', [HomeController::class, 'Contact'])->name('contact-us');
Route::get('/simulations', [HomeController::class, 'Simulations'])->name('simulations');
Route::get('/pricing', [HomeController::class, 'Pricing'])->name('pricing');
Route::get('/blog', [HomeController::class, 'ListPosts'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'GetPost']);


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/simulations', [AdminController::class, 'Simulations'])->name('simulations');
});

require __DIR__.'/auth.php';
