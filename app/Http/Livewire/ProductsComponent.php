<?php

namespace App\Http\Livewire;

use App\Cart\Basket;
use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use Livewire\Component;

class ProductsComponent extends Component
{
    public $sorting;
    public $prducts, $category, $filterCat = [];
    public $pagesize;
    public $category_slug;

    public $min_price;
    public $max_price;

    public $min_alphabet;
    public $max_alphabet;

    public $min_date;
    public $max_date;
    protected $ids;


    /**
     * Create a new CartController instance.
     *
     * @param Basket $basket
     * @param Product $product
     */


    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = "12";

        $this->min_price=1;
        $this->max_price=1000;

        $this->min_alphabet='a';
        $this->max_alphabet='z';

        $this->min_date=1;
        $this->max_date=10000;
    }


    public function render()
    {
        $default_lang = get_default_language();

        if($this->sorting=='date')
        {
            $products = Product::where('active', '1')->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="date-desc")
        {
            $products = Product::where('active', '1')->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price")
        {
            $products = Product::where('active', '1')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price-desc")
        {
            $products = Product::where('active', '1')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet")
        {
            $products = Product::where('active', '1')->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet-desc")
        {
            $products = Product::where('active', '1')->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'DESC')->paginate($this->pagesize);
        }
//        else if ($this->filterCat)
//        {
//            dd($this->category->id);
//            $id = $this->filterCat;
//            $products = Product::where('category_id', $id)->get();
//        }
        else
        {
            $default_lang = get_default_language();

            $meals = Meal::where('published', 1)->get();
            $products = Product::where('active', '1')->whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
        }

        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::where('accountactivated', '1')->get();

        return view('livewire.products-component', ['categories' => $categories, 'providers' => $providers, 'products' => $products]);
    }
}
