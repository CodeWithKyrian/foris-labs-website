<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('pull-up', function () {
    Artisan::call('up');
    return "Website pulled up successfully";
});

Route::get('pull-down', function () {
    $secret = 'our-little-secret-gateway';
    Artisan::call('down', ['--secret' => $secret]);
    return "Website pulled down successfully. Key = '$secret'";
});
Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::get('/privacy-policy', [HomeController::class, 'Privacy'])->name('privacy-policy');
Route::get('/terms-of-use', [HomeController::class, 'Terms'])->name('terms');
Route::get('/contact-us', [HomeController::class, 'Contact'])->name('contact-us');
Route::get('/simulations', [HomeController::class, 'Simulations'])->name('simulations');
Route::get('/pricing', [HomeController::class, 'Pricing'])->name('pricing');
Route::get('/blog', [HomeController::class, 'ListPosts'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'GetPost'])->name('blog.show');
Route::post('/register-affiliate', [HomeController::class, 'RegisterAffiliate'])->name('register-affiliate');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:super-admin,admin', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/simulations', [AdminController::class, 'Simulations'])->name('simulations');
    Route::get('/team', [AdminController::class, 'Team'])->name('team');
    Route::post('/team', [AdminController::class, 'StoreTeam'])->name('team.store');
    Route::put('/team/{user}', [AdminController::class, 'UpdateTeam'])->name('team.update');
    Route::delete('/team/{user}', [AdminController::class, 'DeleteTeam']);
    Route::resource('posts', PostController::class);

    Route::view('settings/page', 'admin.page-settings')->name('settings.page');
    Route::view('settings/general', 'admin.general-settings')->name('settings.general');
    Route::post('settings/update', [AdminController::class, 'UpdateSettings'])->name('settings.update');
});

Route::prefix('affiliate')->name('affiliate.')->middleware(['auth', 'role:affiliate', 'verified'])->group(function () {
    Route::view('/dashboard', 'affiliate.dashboard')->name('dashboard');
});

require __DIR__ . '/auth.php';
