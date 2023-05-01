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



        return view('site.sub_cats', [
            'meals' => $meals,
            'providers' => $providers,
            'categories' => $categories,
            'main_category_slug' => $main_category_slug,
        ]);
    }
    public function sortMealsMain(Request $request)
    {
        $sortOption = $request->input('sort');
        $providerIds = $request->input('providers');
        $categoryIds = $request->input('categories');
        $mainCategorySlug = $request->input('mainCategorySlug');

        $query = Meal::query()->with('provider');

        if ($providerIds) {
            $query->whereIn('provider_id', $providerIds);
        }
        if ($categoryIds) {
            $query->whereIn('subcate_id', $categoryIds);
        }

        switch ($sortOption) {
            case 'featured':
                $query->get();
                break;
            case 'alphabet':
                $query->with(['category' => function($query) use ($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('name', 'asc')->get();
                break;
            case 'alphabet-desc':
                $query->with(['category' => function($query) use($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('name', 'desc')->get();
                break;
            case 'price':
                $query->with(['category' => function ($query) use ($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('price', 'asc')->get();
                break;
            case 'price-desc':
                $query->with(['category' => function ($query) use ($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('price', 'desc')->get();
                break;
            case 'date-desc':
                $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('created_at', 'desc')->get();
                break;
            case 'date':
                $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('created_at', 'asc')->get();
                break;
            default:
                $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }]);
        }
        $meals = $query->where('published', '1')->get();


        return response()->json([
            'meals' => $meals,
            'providerIds' => $providerIds,
        ]);
    }
}
