<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\ProductTranslation;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use App\Models\providers\ProviderRegister;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class RestaurantComponent extends Component
{
    public $sorting;
    public $price_range;


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


        $this->min_alphabet='a';
        $this->max_alphabet='z';

        $this->price_range = $this->getDefaultPriceRange();
        $this->min_price = $this->getMinPrice();
        $this->max_price = $this->getMaxPrice();


    }

    public function filterByPrice($value)
    {
        $this->price_range = $value;

        $this->loadMeals();
    }

    private function loadMeals()
    {
        // load products data from database based on price range filter
        $this->meals = Meal::where('price', '>=', $this->price_range[0])
            ->where('price', '<=', $this->price_range[1])
            ->get();
    }
    private function getDefaultPriceRange()
    {
        return [0, $this->getMaxPrice()];
    }

    private function getMinPrice()
    {
        return Meal::min('price');
    }

    private function getMaxPrice()
    {
        return Meal::max('price');
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
        $mealsQuery = Meal::where('published', 1);

        if($this->sorting=='date')
        {
            $mealsQuery->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="date-desc")
        {
            $mealsQuery->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price")
        {
            $mealsQuery->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'ASC')->paginate($this->pagesize);

        }
        else if ($this->sorting=="price-desc")
        {
            $mealsQuery->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet")
        {
            $mealsQuery->whereBetween('name', [$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet-desc")
        {
            $mealsQuery->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'DESC')->paginate($this->pagesize);
        }

        if ($this->categoryInputs) {
            if ($default_lang == 'en') {
                $mealsQuery->whereIn('main_cate_id', $this->categoryInputs)->paginate($this->pagesize);
            } else {
                $main = MainCategory::whereIn('id', $this->categoryInputs)->first();
                $mealTranslation = MealTranslation::where('main_cate_id', $main->translate_of)->first();

                if ($mealTranslation) {
                    $meal = Meal::find($mealTranslation->meal_id);

                    if ($meal) {
                        $mealsQuery->where('category_id', $meal->category_id)->paginate($this->pagesize);
                    }
                }
            }
        }

        if ($this->filterProviders) {
            $mealsQuery->whereIn('provider_id', $this->filterProviders)->paginate($this->pagesize);
        }

       if ($this->price_range) {
           $this->loadMeals();

       }

        $meals = $mealsQuery->paginate($this->pagesize);

        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::get();
        return view('livewire.restaurant-component', ['categories' => $categories, 'providers' => $providers,'meals' => $meals]
        )->layout('layouts.base');
    }
}
