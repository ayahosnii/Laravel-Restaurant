<?php

namespace App\Http\Controllers;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    public function index($main_category_slug)
    {
        $default_lang = get_default_language();



        $providers = ProviderRegister::get();



        $mainCategory = MainCategory::where('slug', $main_category_slug)->first();
        $categories = SubCategory::where('category_id', $mainCategory->id)
            ->where('translation_lang', $default_lang)->get();
        $meals = Meal::where('main_cate_id', $mainCategory->id)->where('published', '1')->paginate(15);



        return view('site.sub_cats', compact('meals', 'providers', 'categories', 'main_category_slug'));
    }
    public function sortMeals(Request $request, $main_category_slug)
    {
        $sortOption = $request->input('sort');
        $providerIds = $request->input('providers');
        $categoryIds = $request->input('categories');

        $mainCategory = MainCategory::where('slug', $main_category_slug)->first();
        $query = Meal::query();

        if ($providerIds) {
            $query->whereIn('provider_id', $providerIds);
        }
        if ($categoryIds) {
            $query->whereIn('category_id', $categoryIds);
        }

        switch ($sortOption) {
            case 'alphabet':
                $query->with('provider')->orderBy('name', 'asc')->get();
                break;
            case 'alphabet-desc':
                $query->with('provider')->orderBy('name', 'desc')->get();
                break;
            case 'price':
                $query->with('provider')->orderBy('price', 'asc')->get();
                break;
            case 'price-desc':
                $query->with('provider')->orderBy('price', 'desc')->get();
                break;
            case 'date-desc':
                $query->with('provider')->orderBy('created_at', 'desc')->get();
                break;
            case 'date':
                $query->with('provider')->orderBy('created_at', 'asc')->get();
                break;
            default:
                $query->with('provider');
        }
        $meals = $query->where('main_cate_id', $mainCategory->id)->where('published', '1')->paginate();


        return response()->json([
            'meals' => $meals
        ]);
    }
}
