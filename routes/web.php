<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShopController;
use App\Http\Livewire\HomeComponent;
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

    Route::get('/', HomeComponent::class)->name('index');
    Route::get('/shop/main-category/{category_slug}', \App\Http\Livewire\CategoryComponent::class)->name('product.category');
    Route::get('/shop/sub-category/{sub_category_slug}', [\App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/base', [BaseController::class, 'index'])->name('base');
    //Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');



    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    //Route::get('/post/{slug}', [\App\Http\Controllers\BlogController::class, 'create'])->name('blog');
    Route::get('/reservations', [ReservationController::class, 'get_reservations'])->name('reservations');
    Route::get("/reservations/reservation-details/{id}" , [ReservationController::class, "get_reservation"]);
    Route::get("/reservations/add-reservation/{id}/{type}" , [ReservationController::class, "add_reservation"])->name('add.reservations');
    //Route::post("/reservations/add-reservation" , "User\ReservationController@post_add_reservation");
    Route::get("/reservations/decline/{id}" , [ReservationController::class, "decline_reservation"]);
    route::get('shop/{slug}', [ProductController::class, 'productsBySlug'])->name('product.details');
    route::get('shop/meal/{name}', [ProductController::class, 'mealsBySlug'])->name('meal.details');
    route::get('/findprice', [ProductController::class, 'findprice'])->name('findprice');
    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', [\App\Http\Controllers\Site\CartController::class, 'getIndex'])->name('site.cart.index');
        Route::post('/add/{slug?}', [\App\Http\Controllers\Site\CartController::class, 'postAdd'])->name('site.cart.add');
        Route::post('/update/{slug}', [\App\Http\Controllers\Site\CartController::class, 'postUpdate'])->name('site.cart.update');
        Route::post('/update-all', [\App\Http\Controllers\Site\CartController::class, 'postUpdateAll'])->name('site.cart.update-all');
    });
    Route::group(['prefix' => 'restaurant'], function () {
        Route::get('/', [\App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant.index');
        Route::get('/{user_name}', [\App\Http\Controllers\RestaurantController::class, 'get_rest'])->name('restaurant.details');
        Route::get('branch/{b_username}', [\App\Http\Controllers\RestaurantController::class, 'get_branch'])->name('branch.details');
    });

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
        Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index');
        Route::get('/conversations/{conversation}', [ConversationController::class, 'show'])->name('conversations.show');

        Route::get('verify', [\App\Http\Controllers\Site\VerificationCodeController::class, 'getVerifyPage'])->name('get.verification.form');
        Route::post('verify-user/', [\App\Http\Controllers\Site\VerificationCodeController::class, 'verify'])->name('verify-user');
        Route::post('wishlist', [\App\Http\Controllers\WishlistController::class, 'store'])->name('wishlist.store');
        Route::delete('wishlist', [\App\Http\Controllers\WishlistController::class, 'destroy'])->name('wishlist.destroy');
        Route::get('wishlist/products', [\App\Http\Controllers\WishlistController::class, 'index'])->name('wishlist.products.index');
    });

   /* Route::get('{any}', function ($any){
        return view('site.home');
    })->where('any','.*');*/
});




/*Route::middleware(['guest:web', 'guest:providers'])->group(function(){
    Auth::routes();
});*/

//Route::get('/shop-vue', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop-vue');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('sendSMS', [\App\Http\Controllers\Site\VerificationCodeController::class, 'index']);



