<?php

namespace App\Http\Livewire;

use App\Basket\Basket;
use App\Exceptions\QuantityExceededException;
use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\ProductTranslation;
use App\Models\OrderItem;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use AuthorizesRequests;
    use withPagination;

    public $sorting;
    public $product, $category, $categoryInputs = [];
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

    public function removeFromWishList($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-count-component', 'refreshComponent');
                return;
            }
        }
    }


    public function cateClicked()
    {

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
            $products = Product::where('active', '1')->whereBetween('name', [$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet-desc")
        {
            $products = Product::where('active', '1')->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="bestseller")
        {
            $products = OrderItem::groupBy('product_id')->select('product_id', DB::raw('count(*) as total'))->orderBy('total', 'desc')->paginate($this->pagesize);
            dd($products);
        }
        else if ($this->categoryInputs)
        {
            if ($default_lang == 'en'){
                $products = Product::when($this->categoryInputs, function ($q) {
                    $q->whereIn('category_id', $this->categoryInputs);
                    /* })
                     ->when($this->priceInputs, function ($q) {
                         $q->whereIn('category_id', $this->priceInputs);*/

                })->get();
            }else{
                $products = ProductTranslation::where('category_id', $this->categoryInputs)->get();


                $pro = $products[0]->product_id;

                $product = Product::where('id', $pro)->first();
                $category_id = $product->category_id;
                $products = Product::where('category_id', $category_id)->get();
               /* dd( Product::
                    join('product_translations', 'product_translations.product_id', '=', 'products.id')
                    ->select('products.*', 'product_translations.name')
                    ->where('products.category_id',  $this->categoryInputs)
                    ->first());*/
            }
        }
        else
        {
            $default_lang = get_default_language();

            $products = Product::where('active', '1')->whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
        }


        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::get();
        return view('livewire.shop-component', ['categories' => $categories, 'products' => $products, 'providers' => $providers])->layout('layouts.base');

    }
}
