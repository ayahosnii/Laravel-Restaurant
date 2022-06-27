<?php
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
    Route::get("/activate-phone", [\App\Http\Controllers\Providers\AuthController::class, "get_activate_phone"]);
    Route::post("/activate-phone", [\App\Http\Controllers\Providers\AuthController::class, "store_verification_code"])->name('store-verify');
    Route::post('/register', [\App\Http\Controllers\providers\ProviderRegisterController::class, 'store'])->name('register.store');
    Route::post('/login', [\App\Http\Controllers\providers\ProviderLoginController::class, 'store'])->name('login.store');

    //Dashboard
    Route::middleware(['providers'])->group(function(){

        Route::get("/dashboard" , [\App\Http\Controllers\providers\DashboardController::class, 'index'])->name('provider.dashboard');
        Route::get("/sub-categories" , [\App\Http\Controllers\providers\DashboardController::class, 'get_cities'])->name('provider.get_cities');


#################################################### Start Categories ####################################################3
        Route::get("/categories", [\App\Http\Controllers\providers\CategoryController::class, "index"])->name("categories");
        Route::get("/categories/create", [\App\Http\Controllers\providers\CategoryController::class, "create"])->name("categories.create");
        Route::post("/categories/store", [\App\Http\Controllers\providers\CategoryController::class, "store"])->name("providers.categories.store");
    });
#################################################### Start Profile ####################################################3
        Route::get("/profile/{id}" , [\App\Http\Controllers\providers\ProfileController::class, 'index'])->name('providers.profile');
        Route::post("/profile/update_res_profile/{id}" , [\App\Http\Controllers\providers\ProfileController::class, 'update_profile'])->name('providers.profile.update');

#################################################### Start Branches ####################################################3
        Route::get("/branches" , [\App\Http\Controllers\providers\BranchController::class, 'index'])->name('branch.all');
        Route::get("/branches/create" , [\App\Http\Controllers\providers\BranchController::class, 'create'])->name('branch.create');
        Route::post("/branches/store" , [\App\Http\Controllers\providers\BranchController::class, 'store'])->name('branch.store');

#################################################### Start Meals ####################################################3
        Route::get("/meals", [\App\Http\Controllers\providers\MealController::class, "index"])->name("meals");
        Route::get("/meals/create", [\App\Http\Controllers\providers\MealController::class, "create"])->name("meals.create");
        Route::post("/meals/store", [\App\Http\Controllers\providers\MealController::class, "store"])->name("meals.store");
    });
