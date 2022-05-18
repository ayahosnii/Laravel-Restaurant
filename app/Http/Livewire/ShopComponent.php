<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ShopComponent extends Component
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

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name,1, $product_price)->associate('App\Models\admin\Product');
        Session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('shop');
    }

    public function addToWishList($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name,1, $product_price)->associate('App\Models\admin\Product');
        $this->emitTo('wish-list-count-component', 'refreshComponent');
    }

    public function render()
    {
        $default_lang = get_default_language();
         if($this->sorting=='date')
        {
            $products = Product::where('translation_lang', $default_lang)->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'ASC')->paginate($this->pagesize);
        }
         else if ($this->sorting=="date-desc")
         {
             $products = Product::where('translation_lang', $default_lang)->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'DESC')->paginate($this->pagesize);
         }
        else if ($this->sorting=="price")
        {
            $products = Product::where('translation_lang', $default_lang)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price-desc")
        {
            $products = Product::where('translation_lang', $default_lang)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet")
        {
            $products = Product::where('translation_lang', $default_lang)->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet-desc")
        {
            $products = Product::where('translation_lang', $default_lang)->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'DESC')->paginate($this->pagesize);
        }
        else
        {
            $products = Product::where('translation_lang', $default_lang)->whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
        }


        $categories = MainCategory::where('translation_lang', $default_lang)->get();

        return view('livewire.shop-component', ['categories' => $categories, 'products' => $products])->layout('layouts.base');
    }
}
