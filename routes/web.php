<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Site\SiteController;
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


Auth::routes();

Route::prefix('front')->group(function () {

    Route::get('/', [SiteController::class, 'index']);

    Route::get('properties', [SiteController::class, 'showAllProperties'])->name('showAllProperties');
});

Route::middleware('auth')->group(function () {
    // profile
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');


    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('index');
        })->name('dashboard.index');

        Route::middleware('userType')->group(function () {

            Route::resource('properties', PropertyController::class);
        });
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
