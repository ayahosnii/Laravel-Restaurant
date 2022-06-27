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
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'/*, 'verifiedUser', 'guest'*/ ]  ], function () {

    Route::get('/', \App\Http\Livewire\HomeComponent::class)->name('index');
    Route::get('/shop/main-category/{category_slug}', \App\Http\Livewire\CategoryComponent::class)->name('product.category');
    Route::get('/shop/sub-category/{sub_category_slug}', [\App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/base', [\App\Http\Controllers\BaseController::class, 'index'])->name('base');
    //Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
    Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop');
    route::get('shop/{slug}', [\App\Http\Controllers\ProductController::class, 'productsBySlug'])->name('product.details');
    route::get('shop/meal/{name}', [\App\Http\Controllers\ProductController::class, 'mealsBySlug'])->name('meal.details');
    route::get('/findprice', [\App\Http\Controllers\ProductController::class, 'findprice'])->name('findprice');

});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'verifiedUser' ]
    ], function(){
    Route::get('/search', \App\Http\Livewire\SearchComponent::class)->name('search');
    //Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('cart');
    Route::get('/wish-list', \App\Http\Livewire\WishListComponent::class)->name('wishlist');
    Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class)->name('checkout');
/*    Route::get('/shop/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('details');*/

    //Must authenticate user and verify
    Route::get('profile', function(){
        return 'You Are Authenticated';
    });

    //Verification [SMS]
    Route::group( ['middleware' => 'auth' ], function() {
        Route::get('verify', [\App\Http\Controllers\Site\VerificationCodeController::class, 'getVerifyPage'])->name('get.verification.form');
        Route::post('verify-user/', [\App\Http\Controllers\Site\VerificationCodeController::class, 'verify'])->name('verify-user');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('wishlist', [\App\Http\Controllers\WishlistController::class, 'store'])->name('wishlist.store');
    Route::delete('wishlist', [\App\Http\Controllers\WishlistController::class, 'destroy'])->name('wishlist.destroy');
    Route::get('wishlist/products', [\App\Http\Controllers\WishlistController::class, 'index'])->name('wishlist.products.index');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [\App\Http\Controllers\Site\CartController::class, 'getIndex'])->name('site.cart.index');
    Route::post('/add/{slug?}', [\App\Http\Controllers\Site\CartController::class, 'postAdd'])->name('site.cart.add');
    Route::post('/update/{slug}', [\App\Http\Controllers\Site\CartController::class, 'postUpdate'])->name('site.cart.update');
    Route::post('/update-all', [\App\Http\Controllers\Site\CartController::class, 'postUpdateAll'])->name('site.cart.update-all');
});

Route::group(['prefix' => 'restaurant'], function () {
    Route::get('/', [\App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant.index');
    Route::get('/{user_name}', [\App\Http\Controllers\RestaurantController::class, 'get_rest'])->name('restaurant.details');
});
Route::middleware(['guest:web', 'guest:providers'])->group(function(){
    Auth::routes();
});

//Route::get('/shop-vue', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop-vue');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('sendSMS', [\App\Http\Controllers\Site\VerificationCodeController::class, 'index']);
