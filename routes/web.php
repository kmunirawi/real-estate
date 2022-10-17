<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);

Auth::routes();
Route::get('properties', [SiteController::class, 'showAllProperties'])->name('showAllProperties');


Route::middleware('auth')->group(function () {
    // profile
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');


    Route::prefix('dashboard', function () {
        Route::get('/cpanel', function () {
            return view('index');
        });
        Route::resource('properties', PropertyController::class);
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
