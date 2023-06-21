<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\OrderItem;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use App\Models\providers\ProviderRegister;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BestSellerComponent extends BaseLivewireComponent
{
    public function render()
    {
        $default_lang = get_default_language();

        $bestSellers = DB::table('order_items')
            ->select('meal_id', DB::raw('count(*) as total'))
            ->groupBy('meal_id')
            ->orderBy('total', 'desc')
            ->take(10) // Change this number to get more or fewer best-sellers
            ->pluck('meal_id');

        $mealsQuery = Meal::whereIn('id', $bestSellers)->where('published', 1);

        $meals = $this->getFilteredMeals($mealsQuery, $this->sorting, $this->min_date, $this->max_date, $this->min_price, $this->max_price, $this->min_alphabet, $this->max_alphabet);

        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = ProviderRegister::where('accountactivated', '1')->get();

        return view('livewire.collection.best-seller-component', ['categories' => $categories, 'meals' => $meals, 'providers' => $providers])->layout('layouts.base');
    }
}
