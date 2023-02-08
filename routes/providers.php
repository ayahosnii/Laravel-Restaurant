<?php

use App\Http\Controllers\providers\AuthController;
use App\Http\Controllers\providers\BranchController;
use App\Http\Controllers\providers\CategoryController;
use App\Http\Controllers\providers\DashboardController;
use App\Http\Controllers\providers\MealController;
use App\Http\Controllers\providers\ProfileController;
use App\Http\Controllers\providers\ProviderLoginController;
use App\Http\Controllers\providers\ProviderRegisterController;
use App\Http\Controllers\providers\ReservationController;
use App\Http\Controllers\providers\TableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Providers Routes
|--------------------------------------------------------------------------
|
| Here is where you can register providers routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "providers" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => 'providers',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        //Authentication
    Route::get("/activate-phone", [AuthController::class, "get_activate_phone"]);
    Route::post("/activate-phone", [AuthController::class, "store_verification_code"])->name('store-verify');
    Route::post('/register', [ProviderRegisterController::class, 'store'])->name('register.store');
    Route::post('/login', [ProviderLoginController::class, 'store'])->name('login.store');

    //Dashboard
    Route::middleware(['providers'])->group(function(){

        Route::get("/dashboard" , [DashboardController::class, 'index'])->name('provider.dashboard');
        Route::get("/sub-categories" , [DashboardController::class, 'get_cities'])->name('provider.get_cities');


#################################################### Start Categories ####################################################3
        Route::get("/categories", [CategoryController::class, "index"])->name("categories");
        Route::get("/categories/create", [CategoryController::class, "create"])->name("categories.create");
        Route::post("/categories/store", [CategoryController::class, "store"])->name("providers.categories.store");
    });
#################################################### End Categories ####################################################3
#################################################### Start Tables ####################################################3
        Route::get("/tables", [TableController::class, "index"])->name("tables");
        Route::get("/tables/create", [TableController::class, "create"])->name("tables.create");
        Route::post("/tables/store", [TableController::class, "store"])->name("providers.tables.store");
    });
#################################################### End Tables ####################################################3
#################################################### Start Profile ####################################################3
        Route::get("/profile/{id}" , [ProfileController::class, 'index'])->name('providers.profile');
        Route::post("/profile/update_res_profile/{id}" , [ProfileController::class, 'update_profile'])->name('providers.profile.update');

#################################################### Start Reservation ####################################################3
        Route::get("/reservation" , [ReservationController::class, 'show'])->name('reservation.show');

#################################################### Start Branches ####################################################3
        Route::get("/branches" , [BranchController::class, 'index'])->name('branch.all');
        Route::get("/branches/create" , [BranchController::class, 'create'])->name('branch.create');
        Route::post("/branches/store" , [BranchController::class, 'store'])->name('branch.store');

#################################################### Start Meals ####################################################3
        Route::get("/meals", [MealController::class, "index"])->name("meals");
        Route::get("/meals/create", [MealController::class, "create"])->name("meals.create");
        Route::post("/meals/store", [MealController::class, "store"])->name("meals.store");

