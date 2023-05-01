<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
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

    public $price_range = [];


    protected $stringQuery = ['filterProviders'];

    public $product, $filterProviders = [], $categoryInputs = [];



    protected $ids;



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
        $mealsQuery = Meal::where('name', 'like', '%'.$this->search .'%')->where('published', 1);

        if($this->sorting=='date')
        {
            $meals = $mealsQuery->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'ASC');
        }
        else if ($this->sorting=="date-desc")
        {
            $meals = $mealsQuery->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'DESC');
        }
        else if ($this->sorting=="price")
        {
            $meals = $mealsQuery->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'ASC');

        }
        else if ($this->sorting=="price-desc")
        {
            $meals = $mealsQuery->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'DESC');
        }
        else if ($this->sorting=="alphabet")
        {
            $meals = $mealsQuery->whereBetween('name', [$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'ASC');
        }
        else if ($this->sorting=="alphabet-desc")
        {
            $meals = $mealsQuery->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'DESC');
        }

        if ($this->categoryInputs) {
            if ($default_lang == 'en') {
                $meals = $mealsQuery->whereIn('main_cate_id', $this->categoryInputs);
            } else {
                $main = MainCategory::whereIn('id', $this->categoryInputs)->first();
                $mealTranslation = MealTranslation::where('main_cate_id', $main->translate_of)->first();

                if ($mealTranslation) {
                    $meal = Meal::find($mealTranslation->meal_id);

                    if ($meal) {
                        $meals = $mealsQuery->where('category_id', $meal->category_id);
                    }
                }
            }
        }

        if ($this->filterProviders) {
            $meals = $mealsQuery->whereIn('provider_id', $this->filterProviders);
        }



        $meals = $mealsQuery->whereBetween('price',[$this->min_price,$this->max_price])->paginate($this->pagesize);



        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::where('accountactivated', '1')->get();


        return view('livewire.search-component', ['categories' => $categories, 'meals' => $meals, 'providers' => $providers])->layout('layouts.base');
    }
}


