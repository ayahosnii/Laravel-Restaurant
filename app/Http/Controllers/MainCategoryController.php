<?php

namespace App\Http\Controllers;

use App\Filters\CategoryFilter;
use App\Filters\ProviderFilter;
use App\Filters\SortingOption;
use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use App\Traits\MainCatFilter;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    use MainCatFilter;

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
    public function sortMealsMain(Request $request)
    {
        //The requests
        $sortOption = $request->input('sort');
        $providerIds = $request->input('providers');
        $categoryIds = $request->input('categories');
        $mainCategorySlug = $request->input('mainCategorySlug');

        $query = Meal::query()->with('provider');

        //Filters Functions
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
