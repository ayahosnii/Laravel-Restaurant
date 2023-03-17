<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\providers\Branch;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use App\Models\providers\ProviderRegister;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;


class CategoryComponent extends Component
{
    public $sorting;

    protected $stringQuery = ['filterProviders'];

    public $product, $filterProviders = [], $categoryInputs = [];
    protected $queryString = [
        'categoryInputs' => ['except' => '', 'as' => 'category'],
        //'priceInputs' => ['except' => '', 'as' => 'price']
    ];



    public $pagesize;
    public $category_slug;

    public $min_price;
    public $max_price;

    public $min_alphabet;
    public $max_alphabet;

    public $min_date;
    public $max_date;
    protected $ids;

    public function mount($categorySlug)
    {
        $this->sorting = "default";
        $this->pagesize = "12";

        $this->min_price=1;
        $this->max_price=1000;

        $this->min_alphabet='a';
        $this->max_alphabet='z';

        $this->min_date=1;
        $this->max_date=10000;
        $this->categorySlug = $categorySlug;

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
        if($this->sorting=='date')
        {
            $meals = Meal::where('published', 1)->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="date-desc")
        {
            $meals = Meal::where('published', 1)->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price")
        {
            $meals = Meal::where('published', 1)->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'ASC')->paginate($this->pagesize);

        }
        else if ($this->sorting=="price-desc")
        {
            $meals = Meal::where('published', 1)->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'DESC')->paginate($this->pagesize);

        }
        else if ($this->categoryInputs) {
            if ($default_lang == 'en') {

                $meals = Meal::where('published', 1)->whereIn('main_cate_id', $this->categoryInputs)->get();

            } else {
                $main = MainCategory::whereIn('id', $this->categoryInputs)->first();
                $mealTranslation = MealTranslation::where('main_cate_id', $main->translate_of)->first();

                if ($mealTranslation) {
                    $meal = Meal::find($mealTranslation->meal_id);


                    if ($meal) {
                        $meals = Meal::where('category_id', $meal->category_id)->get();
                    } else {
                        $meals = collect();
                    }
                } else {
                    $meals = collect();
                }
            }
        }

        else if ($this->sorting=="alphabet")
        {
            $meals = Meal::where('published', 1)->whereBetween('name', [$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet-desc")
        {
            $meals = Meal::where('published', 1)->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->filterProviders)
        {
            $meals = Meal::whereIn('provider_id', $this->filterProviders)->get();
        }
        else
        {
            $default_lang = get_default_language();

            $meals = Meal::where('published', 1)
                ->where('maincate_id', $this->route('category_slug'))->get();

        }



        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::get();
        return view('livewire.category-component', ['categories' => $categories, 'providers' => $providers,'meals' => $meals]
        )->layout('layouts.base');
    }
}
