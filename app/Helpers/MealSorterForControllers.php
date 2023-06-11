<?php

namespace App\Helpers;

use App\Contracts\MealSorter;
use App\Models\providers\Meal;
use Illuminate\Database\Eloquent\Builder;

class MealSorterForControllers implements MealSorter
{
    public function sortMeals($query, $sortOption)
    {
        switch ($sortOption) {
            case 'featured':
                break;
            case 'alphabet':
                $query->orderBy('name', 'asc');
                break;
            case 'alphabet-desc':
                $query->orderBy('name', 'desc');
                break;
            case 'price':
                $query->orderBy('price', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('price', 'desc');
                break;
            case 'date-desc':
                $query->orderBy('created_at', 'desc');
                break;
            case 'date':
                $query->orderBy('created_at', 'asc');
                break;
        }

        return $query;
    }
}
