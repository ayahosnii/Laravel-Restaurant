<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'verifiedUser', 'guest' ]  ], function () {

    Route::get('/', \App\Http\Livewire\HomeComponent::class)->name('index');
    Route::get('/product-category/{category_slug}', \App\Http\Livewire\CategoryComponent::class)->name('product.category');
    Route::get('/base', [\App\Http\Controllers\BaseController::class, 'index'])->name('base');
    Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'verifiedUser' ]
    ], function(){
    Route::get('/search', \App\Http\Livewire\SearchComponent::class)->name('search');
    Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('cart');
    Route::get('/wish-list', \App\Http\Livewire\WishListComponent::class)->name('wishlist');
    Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class)->name('checkout');
    Route::get('/shop/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('details');

    //Must authenticate user and verify
    Route::get('profile', function(){
        return 'You Are Authenticated';
    });
});




//Verification [SMS]
Route::group(['prefix' => LaravelLocalization::setLocale(),
                'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'middleware' => 'auth' ]], function() {
    Route::get('verify', [\App\Http\Controllers\Site\VerificationCodeController::class, 'getVerifyPage'])->name('get.verification.form');
    Route::post('verify-user/', [\App\Http\Controllers\Site\VerificationCodeController::class, 'verify'])->name('verify-user');
});
//Route::get('/shop-vue', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop-vue');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

