<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use App\Models\providers\ProviderRegister;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SaleComponent extends Component
{
    public $sorting;
    public $price_range = [];


    protected $stringQuery = ['filterProviders'];

    public $product, $filterProviders = [], $categoryInputs = [];



    public $pagesize;
    public $category_slug;

    public $min_price;
    public $max_price;

    public $min_alphabet;
    public $max_alphabet;

    public $min_date;
    public $max_date;
    protected $ids;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = "12";

        $this->min_price=1;
        $this->max_price=1000;

        $this->min_alphabet='a';
        $this->max_alphabet='z';

    }


    public function addToCart($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('cart')->add($meal_id, $meal_name,1, $meal_price)->associate('App\Models\providers\Meal');
        Session()->flash('success_message', 'Item added in Cart');
    }

    public function addToWishList($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('wishlist')->add($meal_id, $meal_name,1, $meal_price)->associate('App\Models\providers\Meal');
        $this->emitTo('wish-list-count-component', 'refreshComponent');
    }

    public function removeFromWishList($meal_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $meal_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-count-component', 'refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        $default_lang = get_default_language();
        $mealsQuery = Meal::where('published', 1)->whereHas('sales', function ($query) {
            $query->where('percentage', '>', 0)
                ->where('ends_at', '>', now());
        });;

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

        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::get();
        return view('livewire.sale-component', ['categories' => $categories, 'meals' => $meals, 'providers' => $providers])->layout('layouts.base');

    }
}
