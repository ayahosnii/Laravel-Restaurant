<?php

namespace App\Http\Controllers;

use App\Models\admin\MainCategory;
use App\Models\admin\SubCategory;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use App\Services\Filters\CategoryFilter;
use App\Services\Filters\ProviderFilter;
use App\Services\Filters\SortingOption;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    public function index($main_category_slug)
    {
        $default_lang = get_default_language();



        $providers = ProviderRegister::where('accountactivated', '1')->get();



        $mainCategory = MainCategory::where('slug', $main_category_slug)->first();
        $categories = SubCategory::where('category_id', $mainCategory->id)
            ->where('translation_lang', $default_lang)->get();
        $meals = Meal::where('main_cate_id', $mainCategory->id)->where('published', '1')->paginate(15);



        return view('site.main_cats', [
            'meals' => $meals,
            'providers' => $providers,
            'categories' => $categories,
            'main_category_slug' => $main_category_slug,
        ]);
    }
    public function sortMealsMain(Request $request): \Illuminate\Http\JsonResponse
    {
        //The requests
        $sortOption = $request->input('sort');
        $providerIds = $request->input('providers');
        $categoryIds = $request->input('categories');
        $mainCategorySlug = $request->input('mainCategorySlug');

        $query = Meal::query()->with('provider');

        //Filter Functions
        $providerFilter = new ProviderFilter();
        $providerFilter->filter($query, $providerIds);

        $categoryFilter = new CategoryFilter();
        $categoryFilter->filter($query, $categoryIds);

        $sortingOption = new SortingOption();
        $sortingOption->filter($sortOption, $mainCategorySlug, $query);

        $meals = $query->where('published', '1')->get();


        return response()->json([
            'meals' => $meals,
            'providerIds' => $providerIds,
        ]);
    }

}
