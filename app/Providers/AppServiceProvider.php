<?php

namespace App\Providers;

use App\Basket\Basket;
use App\Models\admin\MainCategory;
use App\Models\SubCategory;
use Illuminate\Support\ServiceProvider;
use App\Support\Storage\Contracts\StorageInterface;
use App\Support\Storage\SessionStorage;
use Illuminate\Support\Facades\Schema;
use App\View\Composers\CartComposer;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{



    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        $this->app->bind(StorageInterface::class, function ($app) {
            return new SessionStorage('basket');
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function () {
            view()->share('main_cats',  MainCategory::where('active', '1')
                ->where('translation_lang', get_default_language())
                ->orderBy('id', 'desc')
                ->get());

            view()->share('sub_cats',  SubCategory::where('active', '1')
                ->where('translation_lang', get_default_language())
                ->orderBy('id', 'desc')
                ->get());

            View::composer('layouts.base-vue', CartComposer::class);


//            view()->share();
        });
    }
}
