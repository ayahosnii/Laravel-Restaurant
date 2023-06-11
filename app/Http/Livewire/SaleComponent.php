<?php

namespace App\Http\Livewire;

use App\Helpers\MealCategorySorter;
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
        $mealsQuery = Meal::where('published', 1)
            ->whereHas('sales', function ($query) {
                $query->where('percentage', '>', 0)
                    ->where('ends_at', '>', now());
            });

        $mealsQuery = $this->getFilteredMeals($mealsQuery);

        $data = $this->getData($mealsQuery);

        $meals = $mealsQuery->whereBetween('price', [$this->min_price, $this->max_price])
            ->paginate($this->pagesize);

        return view('livewire.sale-component', [
            'categories' => $data['categories'],
            'meals' => $meals,
            'providers' => $data['providers'],
        ])->layout('layouts.base');
    }
}
