<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public $min_price;
    public $max_price;

    public $min_alphabet;
    public $max_alphabet;

    public $min_date;
    public $max_date;


    public $search;
    public $product_cat_id;
    public $meal_cat_id;



    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = "12";

        $this->min_price = 1;
        $this->max_price = 1000;

        $this->min_alphabet = 'a';
        $this->max_alphabet = 'z';

        $this->min_date = 1;
        $this->max_date = 10000;

        $this->fill(request()->only('search', 'product_cat', 'product_cat_id', 'meal_cat_id'));
    }

    public function render()
    {
        $default_lang = get_default_language();
        if($this->sorting=='date')
        {
            $products = Product::where('name', 'like', '%'.$this->search .'%')->where('category_id','like','%'. $this->product_cat_id .'%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
            $meals = Meal::where('name', 'like', '%'.$this->search .'%')->where('meal_id','like','%'. $this->meal_cat_id .'%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price")
        {
            $products = Product::where('name', 'like', '%'.$this->search .'%')->where('category_id','like','%'. $this->product_cat_id .'%')->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
            $meals = Meal::where('name', 'like', '%'.$this->search .'%')->orderBy('price', 'ASC')/*->where('meal_id','like','%'. $this->meal_cat_id .'%')*/->paginate($this->pagesize);
            $products = $products->merge($meals);
        }
        else if ($this->sorting=="price-desc")
        {
            $products = Product::where('name', 'like', '%'.$this->search .'%')->where('category_id','like','%'. $this->product_cat_id .'%')->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
            $meals = Meal::where('name', 'like', '%'.$this->search .'%')->orderBy('price', 'DESC')/*->where('meal_id','like','%'. $this->meal_cat_id .'%')*/->paginate($this->pagesize);
            $products = $products->merge($meals);
        }
        else
        {

            $meals = Meal::where('name', 'like', '%'.$this->search .'%')/*->where('meal_id','like','%'. $this->meal_cat_id .'%')*/->paginate($this->pagesize);
        }


        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::get();


        return view('livewire.search-component', ['categories' => $categories, 'meals' => $meals, 'providers' => $providers])->layout('layouts.base');
    }
}


