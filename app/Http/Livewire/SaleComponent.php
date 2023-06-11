<?php

namespace App\Http\Livewire;

use App\Helpers\MealCategorySorter;
use App\Helpers\MealSorter;
use App\Models\admin\MainCategory;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SaleComponent extends BaseLivewireComponent
{
    public function render()
    {
        $default_lang = get_default_language();

        $mealsQuery = Meal::where('published', 1)
            ->whereHas('sales', function ($query) {
                $query->where('percentage', '>', 0)
                    ->where('ends_at', '>', now());
            });

        $mealsQuery = $this->getFilteredMeals($mealsQuery);

        $data = $this->getData($mealsQuery);

        $meals = $data['meals'];
        $categories = $data['categories'];
        $providers = $data['providers'];

        $meals = $meals->whereBetween('price', [$this->min_price, $this->max_price])
            ->paginate($this->pagesize);

        return view('livewire.sale-component', [
            'categories' => $categories,
            'meals' => $meals,
            'providers' => $providers,
        ])->layout('layouts.base');
    }
}
