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
    public function sortMealsMain(Request $request) {
        $sortOption = $request->input('sort');
        $providerIds = $request->input('providers');
        $categoryIds = $request->input('categories');
        $mainCategorySlug = $request->input('mainCategorySlug');

        $sortingOption = $this->getSortingOption($sortOption);

        $query = Meal::query()->whereIn('provider_id', $providerIds);
        $this->eagerLoadCategory($query, $mainCategorySlug);

        if ($categoryIds) {
            $query->whereIn('subcate_id', $categoryIds);
        }

        $meals = $query->where('published', '1')
            ->orderBy($sortingOption)
            ->get();

        return response()->json([
            'meals' => $meals,
            'providerIds' => $providerIds,
        ]);
    }

    private function getSortingOption($sortOption) {
        switch ($sortOption) {
            case 'featured':
                return 'featured';
            case 'alphabet':
                return 'name';
            case 'alphabet-desc':
                return 'name desc';
            case 'price':
                return 'price';
            case 'price-desc':
                return 'price desc';
            case 'date-desc':
                return 'created_at desc';
            case 'date':
                return 'created_at';
            default:
                return null;
        }
    }

    private function eagerLoadCategory($query, $mainCategorySlug) {
        $query->with(['category' => function($query) use ($mainCategorySlug){
            $query->where('slug', $mainCategorySlug);
        }]);
    }
}
