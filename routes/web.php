<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\CustomerServiceChatController;
use App\Http\Controllers\GenerateIdeaController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\providers\AuthController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Livewire\BestSellerComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\OrderHistoryComponent;
use App\Http\Livewire\RestaurantComponent;
use App\Http\Livewire\SaleComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\SpecialMealComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\WishListComponent;
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


/*
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');*/

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

############################## Login by Social Media ##############################
Route::get('auth/facebook', [AuthController::class, 'redirectToFacebook']);
Route::get('auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('auth/facebook/callback', [AuthController::class, 'handleFacebookCallback']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
############################## Login by Social Media ##############################


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'/*, 'verifiedUser', 'guest'*/ ]  ], function () {

    Route::get('/', HomeComponent::class)->name('index');



    Route::group(['prefix' => 'restaurant-meals'], function () {
        Route::get('/', RestaurantComponent::class)->name('restaurant.index');
        Route::get('/ajax', [RestaurantController::class, 'meals'])->name('restaurant.ajax');
        Route::get('/main-category/{main_category_slug}', [MainCategoryController::class, 'index'])->name('main-category.index');
        //Route::get('/main-category/{category_slug}', CategoryComponent::class)->name('main-category.index');
        Route::get('/sub-category/{sub_category_slug}', [SubCategoryController::class, 'index'])->name('sub-category.index');
        Route::get('meal/{name}', [ProductController::class, 'mealsBySlug'])->name('meal.details');

        ################################ All providers section #########################################
        Route::get('/all', [RestaurantController::class, 'index'])->name('restaurant.all');
        Route::get('/{user_name}', [RestaurantController::class, 'get_rest'])->name('restaurant.details');
        Route::get('branch/{b_username}', [RestaurantController::class, 'get_branch'])->name('branch.details');
        ################################ All providers section #########################################

    });

    //############################################ ChatGPT API ############################################
    Route::get('/generate-ideas', [GenerateIdeaController::class, 'index'])->name('generate');
    Route::post('/generate-ideas/create', [GenerateIdeaController::class, 'generate'])->name('generate-ideas.create');
    //############################################ ChatGPT API ############################################


    Route::get('/base', [BaseController::class, 'index'])->name('base');


    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    //############################################ reservation ############################################
    Route::get('/reservation/step-one', [ReservationController::class, 'stepOne'])->name('reservations');
    Route::post('/reservation/step-one', [ReservationController::class, 'storeStepOne'])->name('reservations.store.step.one');
    Route::get('/reservation/step-two', [ReservationController::class, 'stepTwo'])->name('reservations.step.two');
    Route::post('/reservation/step-two', [ReservationController::class, 'storeStepTwo'])->name('reservations.store.step.two');
    //############################################ reservation ############################################


    Route::get("/reservations/decline/{id}" , [ReservationController::class, "decline_reservation"]);
    //route::get('shop/details/{slug}', [ProductController::class, 'productsBySlug'])->name('product.details');
    route::get('/findprice', [ProductController::class, 'findprice'])->name('findprice');
    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', CartComponent::class)->name('site.cart.index');
        Route::post('/add/{slug?}', [CartController::class, 'postAdd'])->name('site.cart.add');
        Route::post('/update/{slug}', [CartController::class, 'postUpdate'])->name('site.cart.update');
        Route::post('/update-all', [CartController::class, 'postUpdateAll'])->name('site.cart.update-all');
    });

    //############################################ AJAX #####################################################
    Route::post('filter-price', [RestaurantController::class, 'filterPrice'])->name('filter.price');
    Route::post('sort-meals', [RestaurantController::class, 'sortMeals'])->name('sort.meal');
    Route::post('sort-meals-main', [MainCategoryController::class, 'sortMealsMain'])->name('sort.meal.main');
    Route::post('/add-to-cart', [RestaurantController::class, 'addToCart'])->name('restaurant.addToCart');
    //############################################ AJAX #####################################################

    //############################################ Collection ############################################
    Route::get('/bestseller', BestSellerComponent::class)->name('bestseller');
    Route::get('/sales', SaleComponent::class)->name('sales');
    Route::get('/special-meal', SpecialMealComponent::class)->name('special.meal');
    //############################################ Collection ############################################

    Route::get('/search', SearchComponent::class)->name('search');
    //Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('cart');
    Route::get('/order-history', OrderHistoryComponent::class)->name('order-history');
    Route::get('/order-details/{id}', OrderHistoryComponent::class)->name('order-details');
    Route::get('/shop/{slug}', DetailsComponent::class)->name('product.details');

    //Must authenticate user and verify
    Route::get('profile', function(){
        return 'You Are Authenticated';
    });

    //Verification [SMS]
    Route::group( ['middleware' => 'auth' ], function() {
        Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index');
        Route::get('/conversations/create', [ConversationController::class, 'create'])->name('conversations.create');
        Route::get('/conversations/{conversation}', [ConversationController::class, 'show'])->name('conversations.show');

        Route::get('verify', [\App\Http\Controllers\Site\VerificationCodeController::class, 'getVerifyPage'])->name('get.verification.form');
        Route::post('verify-user/', [\App\Http\Controllers\Site\VerificationCodeController::class, 'verify'])->name('verify-user');
        Route::post('wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
        Route::delete('wishlist', [WishlistController::class, 'destroy'])->name('wishlist.destroy');
        Route::get('wishlist/products', [WishlistController::class, 'index'])->name('wishlist.products.index');
        Route::get('/checkout', CheckoutComponent::class)->name('checkout');
        Route::get('/wish-list', WishListComponent::class)->name('wishlist');
        Route::get('/thankyou', ThankyouComponent::class)->name('thankyou');


    });
        Route::get('{any}', function ($any){
        return view('site.home');
    })->where('any','.*');

});







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('sendSMS', [\App\Http\Controllers\Site\VerificationCodeController::class, 'index']);


//
//Route::get('/{any}', function () {
//    return view('app');
//})->where('any', '.*');

//Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']) ->name('product.category');
//    Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
//
//    Route::get('/customer-server', [CustomerServiceChatController::class, 'index'])->name('customer-server.index');
//    Route::get('/customer-server/{uuid}', [CustomerServiceChatController::class, 'showConversation'])->name('customer-server.index');
//    Route::get('/customer-server/create', [CustomerServiceChatController::class, 'create'])->name('customer-server.create');
//    Route::post('/customer-server/store/', [CustomerServiceChatController::class, 'store'])->name('customer-server.store');

//    Route::get('/post/{slug}', [\App\Http\Controllers\BlogController::class, 'create'])->name('blog');
//Route::get("/reservations/reservation-details/{id}" , [ReservationController::class, "get_reservation"]);
//Route::get("/reservations/add-reservation/{id}/{type}" , [ReservationController::class, "add_reservation"])->name('add.reservations');
//Route::post("/reservations/add-reservation" , "User\ReservationController@post_add_reservation");
/*Route::middleware(['guest:web', 'guest:providers'])->group(function(){
Auth::routes();
});*/

//Route::get('/shop-vue', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop-vue');

