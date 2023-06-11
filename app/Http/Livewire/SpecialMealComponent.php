<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use App\Models\providers\ProviderRegister;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class SpecialMealComponent extends BaseLivewireComponent
{

    public function render()
    {
        $mealsQuery = Meal::where('published', 1)->where('special', 1);

        $mealsQuery = $this->getFilteredMeals($mealsQuery);

        $data = $this->getData($mealsQuery);

        $meals = $data['meals'];
        $categories = $data['categories'];
        $providers = $data['providers'];

        return view('livewire.special-meal-component', ['categories' => $categories, 'providers' => $providers,'meals' => $meals]
        )->layout('layouts.base');
    }
}
