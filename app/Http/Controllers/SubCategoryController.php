<?php

namespace App\Http\Controllers;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index($sub_category_slug)
    {
        $default_lang = get_default_language();

        $subCategory  = SubCategory::where('slug', $sub_category_slug)
            ->first();
        $meals = $subCategory->meals;

        $providers = ProviderRegister::get();


        $categories = MainCategory::where('translation_lang', $default_lang)->get();

        $meals = Meal::join('main_categories', 'meals.main_cate_id', '=', 'main_categories.id')
            ->join('sub_categories', 'main_categories.id', '=', 'sub_categories.category_id')
            ->where('sub_categories.slug', $sub_category_slug)
            ->where('published', '1')
            ->get();


        return view('site.sub_cats', compact('meals', 'providers', 'categories'));
    }
}
