<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public $category_slug;
    public function render()
    {
        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $products = Product::where('translation_lang', $default_lang)->get();

        $lproducts = Product::orderBy('created_at','DESC')
            ->where('translation_lang', $default_lang)->get()->take(8);

        $sproducts = Product::where('sale_price', '>', 0)
            ->where('translation_lang', $default_lang)
            ->inRandomOrder()->get()->take(8);
        return view('livewire.home-component', ['categories' => $categories, 'products' => $products, 'lproducts' => $lproducts, 'sproducts' => $sproducts])->layout('layouts.base');
    }
}
