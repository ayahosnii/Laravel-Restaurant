<?php

use App\Http\Controllers\admin\AttributeController;
use App\Http\Controllers\admin\backend\NotificationsController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LanguageController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\MainCategoryController;
use App\Http\Controllers\admin\OptionController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RestaurantController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\SaleController;
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

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::any('/notifications/get', [NotificationsController::class, 'getNotifications']);
    Route::any('/notifications/read', [NotificationsController::class, 'markAsRead']);
    Route::any('/notifications/read/{id}', [NotificationsController::class, 'markAsReadAndRedirect']);
    ########################################## Start Languages Route ##############################################################
    Route::get('/languages/index', [LanguageController::class, 'index'])->name('admin.languages');
    Route::get('/languages/create', [LanguageController::class, 'create'])->name('admin.languages.create');
    Route::post('/languages/store', [LanguageController::class, 'store'])->name('admin.languages.store');
    Route::get('/languages/edit/{id}', [LanguageController::class, 'edit'])->name('admin.languages.edit');
    Route::post('/languages/update', [LanguageController::class, 'update'])->name('admin.languages.update');
    Route::get('/languages/destroy', [LanguageController::class, 'destroy'])->name('admin.languages.delete');
    ########################################## End  Languages Route ##############################################################
    ########################################## Start MainCategories Route ##############################################################
    Route::group(['prefix' => 'main-categories'], function () {
        Route::get('/', [MainCategoryController::class, 'index'])->name('admin.maincategories');
        Route::get('/create', [MainCategoryController::class, 'create'])->name('admin.maincategories.create');
        Route::post('/store', [MainCategoryController::class, 'store'])->name('admin.maincategories.store');
        Route::get('/edit/{id}', [MainCategoryController::class, 'edit'])->name('admin.maincategories.edit');
        Route::post('/update/{id}', [MainCategoryController::class, 'update'])->name('admin.maincategories.update');
        Route::get('/destroy', [MainCategoryController::class, 'destroy'])->name('admin.maincategories.destroy');
        Route::get('/changeStatus/{id}', [MainCategoryController::class, 'changeStatus'])->name('admin.maincategories.status');
    });
    ########################################## End  MainCategories Route ######################################################################################################## Start MainCategories Route ##############################################################
    ########################################## Start  SubCategories Route ######################################################################################################## Start MainCategories Route ##############################################################
    Route::get('/sub-categories/index', [SubCategoryController::class, 'index'])->name('admin.subcategories');
    Route::get('/sub-categories/create', [SubCategoryController::class, 'create'])->name('admin.subcategories.create');
    Route::post('/sub-categories/store', [SubCategoryController::class, 'store'])->name('admin.subcategories.store');
    Route::get('/sub-categories/edit/{id}', [SubCategoryController::class, 'edit'])->name('admin.subcategories.edit');
    Route::post('/sub-categories/update', [SubCategoryController::class, 'update'])->name('admin.subcategories.update');
    Route::get('/sub-categories/destroy', [SubCategoryController::class, 'destroy'])->name('admin.subcategories.destroy');
    Route::get('changeStatus/{id}', [SubCategoryController::class, 'changeStatus'])->name('admin.subcategories.status');

    ########################################## End  SubCategories Route ##############################################################
    ########################################## Start Products Route ##############################################################
    Route::get('/meals', [ProductController::class, 'index'])->name('admin.meals');
    Route::get('/meals/create', [ProductController::class, 'create'])->name('admin.meals.create');
    Route::post('/meals/store', [ProductController::class, 'store'])->name('admin.meals.store');
    Route::get('/meals/edit/{id}', [ProductController::class, 'edit'])->name('admin.meals.edit');
    Route::post('/meals/update', [ProductController::class, 'update'])->name('admin.meals.update');
    Route::get('/meals/destroy', [ProductController::class, 'destroy'])->name('admin.meals.delete');
    Route::get('/meals/change/{id}', [ProductController::class, 'changeStatus'])->name('admin.meals.status');

    ########################################## End  Products Route ##############################################################
    ########################################## Start Coupons Route ##############################################################
    Route::get('/coupons', [CouponController::class, 'index'])->name('admin.coupons');
    Route::get('/coupons/create', [CouponController::class, 'create'])->name('admin.coupons.create');
    Route::post('/coupons/store', [CouponController::class, 'store'])->name('admin.coupons.store');
    Route::get('/coupons/edit/{id}', [CouponController::class, 'edit'])->name('admin.coupons.edit');
    Route::post('/coupons/update', [CouponController::class, 'update'])->name('admin.coupons.update');
    Route::delete('/coupons/destroy/{id}', [CouponController::class, 'destroy'])->name('admin.coupons.delete');
    Route::get('changeStatus/{id}', [CouponController::class, 'changeStatus'])->name('admin.coupons.status');

    ########################################## End  Coupons Route ##############################################################
    ########################################## Start Coupons Route ##############################################################
    Route::get('/sales', [SaleController::class, 'index'])->name('admin.sales');
    Route::get('/sales/create', [SaleController::class, 'create'])->name('admin.sales.create');
    Route::post('/sales/store', [SaleController::class, 'store'])->name('admin.sales.store');
    Route::get('/sales/edit/{id}', [SaleController::class, 'edit'])->name('admin.sales.edit');
    Route::post('/sales/update', [SaleController::class, 'update'])->name('admin.sales.update');
    Route::delete('/sales/destroy/{id}', [SaleController::class, 'destroy'])->name('admin.sales.delete');
    Route::get('changeStatus/{id}', [SaleController::class, 'changeStatus'])->name('admin.sales.status');

    ########################################## End  Coupons Route ##############################################################
    ################################## attrributes routes ######################################
    Route::group(['prefix' => 'attributes'], function () {
        Route::get('/', [AttributeController::class, 'index'])->name('admin.attributes');
        Route::get('create', [AttributeController::class, 'create'])->name('admin.attributes.create');
        Route::post('store', [AttributeController::class, 'store'])->name('admin.attributes.store');
        Route::get('delete/{id}', [AttributeController::class, 'destroy'])->name('admin.attributes.delete');
        Route::get('edit/{id}', [AttributeController::class, 'edit'])->name('admin.attributes.edit');
        Route::post('update/{id}', [AttributeController::class, 'update'])->name('admin.attributes.update');
    });
    ################################## end attributes    #######################################

    ################################## start options ######################################
    Route::group(['prefix' => 'options'], function () {
        Route::get('/', [OptionController::class, 'index'])->name('admin.options');
        Route::get('create', [OptionController::class, 'create'])->name('admin.options.create');
        Route::post('store', [OptionController::class, 'store'])->name('admin.options.store');
        //Route::get('delete/{id}','OptionsController@destroy') -> name('admin.options.delete');
        Route::get('edit/{id}', [OptionController::class, 'edit'])->name('admin.options.edit');
        Route::post('update/{id}', [OptionController::class, 'update'])->name('admin.options.update');
    });
    ################################## end options    #######################################
    # ################################## start roles ######################################
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.roles');
        Route::get('create', [RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('store', [RoleController::class, 'store'])->name('admin.roles.store');
        //Route::get('delete/{id}','RolesController@destroy') -> name('admin.roles.delete');
        Route::get('edit/{id}', [RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::post('update/{id}', [RoleController::class, 'update'])->name('admin.roles.update');
    });
    ################################## end options    #######################################
    # ################################## start roles ######################################
    Route::group(['prefix' => 'restaurant'], function () {
        Route::get('/', [RestaurantController::class, 'index'])->name('admin.restaurants');
        Route::get('create', [RestaurantController::class, 'create'])->name('admin.restaurants.create');
        Route::post('store', [RestaurantController::class, 'store'])->name('admin.restaurants.store');
        //Route::get('delete/{id}','RolesController@destroy') -> name('admin.restaurants.delete');
        Route::get('show/{id}', [RestaurantController::class, 'show'])->name('admin.restaurants.show');
        Route::get('edit/{id}', [RestaurantController::class, 'edit'])->name('admin.restaurants.edit');
        Route::post('update/{id}', [RestaurantController::class, 'update'])->name('admin.restaurants.update');
    });
    ################################## end options    #######################################
    ########################################## Start Order Route ##############################################################
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/all', [OrderController::class, 'all'])->name('admin.orders.all');
        Route::get('/pended', [OrderController::class, 'pended'])->name('admin.orders.pended');
        Route::get('/delivered', [OrderController::class, 'delivered'])->name('admin.orders.delivered');
        Route::get('/shipped', [OrderController::class, 'shipped'])->name('admin.orders.shipped');
    });
    ########################################## End  Order Route ######################################################################################################## Start MainCategories Route ##############################################################

});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function(){
    Route::get('login', [LoginController::class, 'getLogin'])->name('get.admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
});
    });
