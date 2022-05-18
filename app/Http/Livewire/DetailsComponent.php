<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsComponent extends Component
{
    public $slug;
    public $qty;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name,1, $product_price)->associate('App\Models\admin\Product');
        Session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('cart');
    }

    public function increaseQuantity()
    {
        $this->qty++;
    }

    public function decreaseQuantity()
    {
        if ($this->qty > 1)
            $this->qty--;
    }
    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $category_name = MainCategory::where('id', $product->category_id)->first();
        //$category_name = Product::where('slug', $this->slug)->where('id', $product->category_id)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        //$sale = Sale::find(1);
        return view('livewire.details-component', ['product' => $product, 'popular_products'=>$popular_products, 'related_products'=>$related_products, 'category_name'=>$category_name])->layout('layouts.base');
    }
}
