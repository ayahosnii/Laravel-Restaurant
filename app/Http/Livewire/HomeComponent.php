<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use Livewire\Component;

class HomeComponent extends Component
{
    public $category_slug;
    public function render()
    {
        $default_lang = get_default_language();
        $main_cats = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->get();
/*        $sub_cats = SubCategory::where('category_id', $main_cats->id)->get();*/
        $data = [];
        $data['sub_categories'] = SubCategory::parent()->select('id', 'slug')->with(['childeren' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['children' => function($qq) {
                $qq->with(['id', 'parent_id', 'slug']);
            }])->get();
        }]);

        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $products = Product::where('translation_lang', $default_lang)
            ->where('active', 1)->get();

        $lproducts = Product::orderBy('created_at','DESC')
            ->where('translation_lang', $default_lang)->where('active', 1)->get()->take(8);

        $sproducts = Product::where('sale_price', '>', 0)
            ->where('translation_lang', $default_lang)
            ->where('active', 1)
            ->inRandomOrder()->get()->take(8);
        return view('livewire.home-component', $data, ['categories' => $categories,'main_cats' => $main_cats/*, 'sub_cat' => $sub_cats*/, 'products' => $products, 'lproducts' => $lproducts, 'sproducts' => $sproducts])->layout('layouts.base');
    }
}
