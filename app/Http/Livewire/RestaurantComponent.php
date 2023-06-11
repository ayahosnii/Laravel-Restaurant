<?php

namespace App\Http\Livewire;

use App\Contracts\CartContract;
use App\Helpers\MealCategorySorter;
use App\Helpers\MealSorterForLivewire;
use App\Models\admin\MainCategory;
use App\Models\providers\Meal;
use App\Models\providers\ProviderRegister;
use Livewire\Component;

class RestaurantComponent extends BaseLivewireComponent
{

    public function render()
    {
        $mealsQuery = Meal::where('published', 1);

        $mealsQuery = $this->getFilteredMeals($mealsQuery);

        $data = $this->getData($mealsQuery);

        $meals = $data['meals'];
        $categories = $data['categories'];
        $providers = $data['providers'];


        return view('livewire.restaurant-component', [
            'categories' => $categories,
            'providers' => $providers,
            'meals' => $meals,
        ])->layout('layouts.base');
    }
}
