<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use App\Models\Post;
use App\Models\providers\Meal;
use App\Models\Sale;
use Carbon\Carbon;
use Livewire\Component;

class HomeComponent extends Component
{
    public $category_slug;

    public $days;
    public $hours;
    public $minutes;
    public $seconds;

    public function updateTimeValues($diff) {
        $this->days = floor($diff / 86400);
        $this->hours = floor(($diff % 86400) / 3600);
        $this->minutes = floor(($diff % 3600) / 60);
        $this->seconds = $diff % 60;
    }

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
        $products = Meal::get();

        $lproducts = Meal::orderBy('created_at','DESC')
            ->get()->take(8);

        $smeals = Meal::whereHas('sales', function ($query) {
            $query->where('percentage', '>', 0)
            ->where('ends_at', '>', now());
        })->inRandomOrder()->take(8)->get();

        $posts = Post::latest()->with('user')->get();

        $sale = Sale::latest()->first();
        $ends_at = Carbon::parse($sale->ends_at);
        $now = Carbon::now();
        $diff = $ends_at->diffInSeconds($now);

        $this->updateTimeValues($diff);
        return view('livewire.home-component', $data, ['categories' => $categories,'main_cats' => $main_cats/*, 'sub_cat' => $sub_cats*/, 'products' => $products, 'lproducts' => $lproducts, 'smeals' => $smeals, 'posts' => $posts, 'sale'=>$sale, 'ends_at' => $ends_at])->layout('layouts.base');
    }
}
