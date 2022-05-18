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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::group(['middleware' => ['changeLanguage']], function() {

    Route::get('/', \App\Http\Livewire\HomeComponent::class)->name('index');
    Route::get('/product-category/{category_slug}', \App\Http\Livewire\CategoryComponent::class)->name('product.category');
    Route::get('/base', [\App\Http\Controllers\BaseController::class, 'index'])->name('base');
    Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
    Route::get('/search', \App\Http\Livewire\SearchComponent::class)->name('search');
    Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('cart');
    Route::get('/wish-list', \App\Http\Livewire\WishListComponent::class)->name('wishlist');
    Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class)->name('checkout');
    Route::get('/shop/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('details');
});


//Route::get('/shop-vue', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop-vue');


