<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\OrderItem;
use App\Models\providers\ProviderRegister;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BestSellerComponent extends Component
{
    public $min_price;
    public $max_price;

    public function render()
    {
        $products = OrderItem::groupBy('product_id')->select('product_id', DB::raw('count(*) as total'))->orderBy('total', 'desc')->get();
        $categories = MainCategory::get();
        $providers = ProviderRegister::get();

        return view('livewire.best-seller-component', ['products' => $products, 'categories' => $categories, 'providers' => $providers])->layout('layouts.base');
    }
}
