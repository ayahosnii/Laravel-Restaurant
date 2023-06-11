<?php

namespace App\Http\Livewire;

use App\Contracts\CartContract;
use App\Contracts\MealCategorySorterContract;
use App\Contracts\MealSorterContract;
use App\Helpers\MealCategorySorter;
use App\Helpers\MealSorterForLivewire;
use App\Models\admin\MainCategory;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use App\Traits\CartTrait;
use Livewire\Component;

class BaseLivewireComponent extends Component implements CartContract
{
    // Trait
    use CartTrait;

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


    //Cart Management

    public function addToCart($meal_id, $meal_name, $meal_price)
    {
        $this->addToCartTrait($meal_id, $meal_name, $meal_price);
    }

    public function addToWishList($meal_id, $meal_name, $meal_price)
    {
        $this->addToWishListTrait($meal_id, $meal_name, $meal_price);
    }

    public function removeFromWishList($meal_id)
    {
        $this->removeFromWishListTrait($meal_id);
    }

    //Filter The Meals
    public function getFilteredMeals($mealsQuery)
    {
        $mealsQuery = MealSorterForLivewire::sortMeals(
            $mealsQuery,
            $this->sorting,
            $this->min_date,
            $this->max_date,
            $this->min_price,
            $this->max_price,
            $this->min_alphabet,
            $this->max_alphabet
        );

        $mealsQuery = MealCategorySorter::filterByCategory($mealsQuery, $this->categoryInputs);

        if ($this->filterProviders) {
            $mealsQuery->whereIn('provider_id', $this->filterProviders);
        }

        return $mealsQuery;
    }


    //Get the meals
    public function getData($mealsQuery)
    {
        $default_lang = get_default_language();

        $meals = $mealsQuery->paginate($this->pagesize);
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::where('accountactivated', '1')->get();

        return [
            'meals' => $meals,
            'categories' => $categories,
            'providers' => $providers,
        ];
    }

}
