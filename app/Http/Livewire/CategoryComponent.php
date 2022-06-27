<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\providers\Branch;
use App\Models\providers\Meal;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;


class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pagesize = "12";
        $this->category_slug = $category_slug;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\admin\Product');
        Session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {
        $category = MainCategory::where('slug', $this->category_slug)
            ->first();

        $category_id = $category->id;
        $category_name = $category->name;

        if($this->sorting=='date')
        {
            $products = Product::where('category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price")
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price-desc")
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else
        {
            $products = Product::where('category_id', $category_id)->paginate($this->pagesize);
        }

        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $meals = Meal::where('maincate_id', $category_id)->paginate($this->pagesize);
        //$branches = Branch::where($meals->branch_id, 'id');



        return view('livewire.category-component', ['categories' => $categories, 'category' => $category, 'products' => $products, 'meals' => $meals])->layout('layouts.base');
    }
}
