<?php

namespace App\Http\Livewire;

use App\Cart\CartManager;
use App\Contracts\CartContract;
use App\Helpers\MealCategorySorter;
use App\Helpers\MealSorterForLivewire;
use App\Models\admin\MainCategory;
use App\Models\providers\ProviderRegister;
use App\Services\Filters\ProviderFilter;
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
        $cartManager = new CartManager();
        $cartManager->addToCart($meal_id, $meal_name, $meal_price);
        Session()->flash('success_message', 'Item added to Cart');
    }

    public function addToWishList($meal_id, $meal_name, $meal_price)
    {
        $cartManager = new CartManager();
        $cartManager->addToWishList($meal_id, $meal_name, $meal_price);
        $this->emitTo('wish-list-count-component', 'refreshComponent');
    }

    public function removeFromWishList($meal_id)
    {
        $cartManager = new CartManager();
        $cartManager->removeFromWishList($meal_id);
        $this->emitTo('wish-list-count-component', 'refreshComponent');
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

        $providerIds = $this->filterProviders;
        $providerFilter = new ProviderFilter();
        $providerFilter->filter($mealsQuery, $providerIds);

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
