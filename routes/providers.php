<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix( 'providers')->group( function () {
    Route::post('/register', [\App\Http\Controllers\providers\ProviderRegisterController::class, 'store'])->name('register.store');
    });
