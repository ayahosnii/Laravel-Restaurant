<?php

namespace App\Providers;

use App\Models\admin\MainCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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

//            view()->share();
        });
    }
}
