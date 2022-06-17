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

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    ########################################## Start Languages Route ##############################################################
    Route::get('/languages/index', [App\Http\Controllers\Admin\LanguageController::class, 'index'])->name('admin.languages');
    Route::get('/languages/create', [App\Http\Controllers\Admin\LanguageController::class, 'create'])->name('admin.languages.create');
    Route::post('/languages/store', [App\Http\Controllers\Admin\LanguageController::class, 'store'])->name('admin.languages.store');
    Route::get('/languages/edit/{id}', [App\Http\Controllers\Admin\LanguageController::class, 'edit'])->name('admin.languages.edit');
    Route::post('/languages/update', [App\Http\Controllers\Admin\LanguageController::class, 'update'])->name('admin.languages.update');
    Route::get('/languages/destroy', [App\Http\Controllers\Admin\LanguageController::class, 'destroy'])->name('admin.languages.delete');
    ########################################## End  Languages Route ##############################################################
    ########################################## Start MainCategories Route ##############################################################
    Route::get('/main-categories/index', [App\Http\Controllers\Admin\MainCategoryController::class, 'index'])->name('admin.maincategories');
    Route::get('/main-categories/create', [App\Http\Controllers\Admin\MainCategoryController::class, 'create'])->name('admin.maincategories.create');
    Route::post('/main-categories/store', [App\Http\Controllers\Admin\MainCategoryController::class, 'store'])->name('admin.maincategories.store');
    Route::get('/main-categories/edit/{id}', [App\Http\Controllers\Admin\MainCategoryController::class, 'edit'])->name('admin.maincategories.edit');
    Route::post('/main-categories/update', [App\Http\Controllers\Admin\MainCategoryController::class, 'update'])->name('admin.maincategories.update');
    Route::get('/main-categories/destroy', [App\Http\Controllers\Admin\MainCategoryController::class, 'destroy'])->name('admin.maincategories.destroy');
    Route::get('changeStatus/{id}', [App\Http\Controllers\Admin\MainCategoryController::class, 'changeStatus'])->name('admin.maincategories.status');

    ########################################## End  SubCategories Route ######################################################################################################## Start MainCategories Route ##############################################################
    Route::get('/sub-categories/index', [App\Http\Controllers\Admin\SubCategoryController::class, 'index'])->name('admin.subcategories');
    Route::get('/sub-categories/create', [App\Http\Controllers\Admin\SubCategoryController::class, 'create'])->name('admin.subcategories.create');
    Route::post('/sub-categories/store', [App\Http\Controllers\Admin\SubCategoryController::class, 'store'])->name('admin.subcategories.store');
    Route::get('/sub-categories/edit/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'edit'])->name('admin.subcategories.edit');
    Route::post('/sub-categories/update', [App\Http\Controllers\Admin\SubCategoryController::class, 'update'])->name('admin.subcategories.update');
    Route::get('/sub-categories/destroy', [App\Http\Controllers\Admin\SubCategoryController::class, 'destroy'])->name('admin.subcategories.destroy');
    Route::get('changeStatus/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'changeStatus'])->name('admin.subcategories.status');

    ########################################## End  SubCategories Route ##############################################################
    ########################################## Start Products Route ##############################################################
    Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products');
    Route::get('/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/edit/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
    Route::post('/products/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.products.update');
    Route::get('/products/destroy', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin.products.delete');
    Route::get('changeStatus/{id}', [App\Http\Controllers\Admin\ProductController::class, 'changeStatus'])->name('admin.products.status');

    ########################################## End  Products Route ##############################################################
    ########################################## Start Coupons Route ##############################################################
    Route::get('/coupons', [App\Http\Controllers\Admin\CouponController::class, 'index'])->name('admin.coupons');
    Route::get('/coupons/create', [App\Http\Controllers\Admin\CouponController::class, 'create'])->name('admin.coupons.create');
    Route::post('/coupons/store', [App\Http\Controllers\Admin\CouponController::class, 'store'])->name('admin.coupons.store');
    Route::get('/coupons/edit/{id}', [App\Http\Controllers\Admin\CouponController::class, 'edit'])->name('admin.coupons.edit');
    Route::post('/coupons/update', [App\Http\Controllers\Admin\CouponController::class, 'update'])->name('admin.coupons.update');
    Route::get('/coupons/destroy', [App\Http\Controllers\Admin\CouponController::class, 'destroy'])->name('admin.coupons.delete');
    Route::get('changeStatus/{id}', [App\Http\Controllers\Admin\CouponController::class, 'changeStatus'])->name('admin.coupons.status');

    ########################################## End  Coupons Route ##############################################################
    ################################## attrributes routes ######################################
    Route::group(['prefix' => 'attributes'], function () {
        Route::get('/', [\App\Http\Controllers\admin\AttributeController::class, 'index'])->name('admin.attributes');
        Route::get('create', [\App\Http\Controllers\admin\AttributeController::class, 'create'])->name('admin.attributes.create');
        Route::post('store', [\App\Http\Controllers\admin\AttributeController::class, 'store'])->name('admin.attributes.store');
        Route::get('delete/{id}', [\App\Http\Controllers\admin\AttributeController::class, 'destroy'])->name('admin.attributes.delete');
        Route::get('edit/{id}', [\App\Http\Controllers\admin\AttributeController::class, 'edit'])->name('admin.attributes.edit');
        Route::post('update/{id}', [\App\Http\Controllers\admin\AttributeController::class, 'update'])->name('admin.attributes.update');
    });
    ################################## end attributes    #######################################

    ################################## start options ######################################
    Route::group(['prefix' => 'options'], function () {
        Route::get('/', [\App\Http\Controllers\admin\OptionController::class, 'index'])->name('admin.options');
        Route::get('create', [\App\Http\Controllers\admin\OptionController::class, 'create'])->name('admin.options.create');
        Route::post('store', [\App\Http\Controllers\admin\OptionController::class, 'store'])->name('admin.options.store');
        //Route::get('delete/{id}','OptionsController@destroy') -> name('admin.options.delete');
        Route::get('edit/{id}', [\App\Http\Controllers\admin\OptionController::class, 'edit'])->name('admin.options.edit');
        Route::post('update/{id}', [\App\Http\Controllers\admin\OptionController::class, 'update'])->name('admin.options.update');
    });
    ################################## end options    #######################################
    # ################################## start roles ######################################
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [\App\Http\Controllers\admin\RoleController::class, 'index'])->name('admin.roles');
        Route::get('create', [\App\Http\Controllers\admin\RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('store', [\App\Http\Controllers\admin\RoleController::class, 'store'])->name('admin.roles.store');
        //Route::get('delete/{id}','RolesController@destroy') -> name('admin.roles.delete');
        Route::get('edit/{id}', [\App\Http\Controllers\admin\RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::post('update/{id}', [\App\Http\Controllers\admin\RoleController::class, 'update'])->name('admin.roles.update');
    });
    ################################## end options    #######################################
});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function(){
    Route::get('login', [App\Http\Controllers\Admin\LoginController::class, 'getLogin'])->name('get.admin.login');
    Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
});
    });
