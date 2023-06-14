<?php

namespace App\Helpers;

use App\Models\providers\Meal;

class MealSorterForLivewire
{
    public static function sortMeals($mealsQuery, array $parameters)
    {
        $sorting = $parameters['sorting'];

        $sortingMethod = 'scope' . ucfirst($sorting);
        if (method_exists(self::class, $sortingMethod)) {
            self::$sortingMethod($mealsQuery, $parameters);
        }

        return $mealsQuery;

    }

    public function scopeDate($mealsQuery, array $parameters)
    {
        $mealsQuery->whereBetween('id', [$parameters['min_date'], $parameters['max_date']])
            ->orderBy('id', $parameters['orderDirection'] ?? 'ASC');
    }

    protected static function scopePrice($mealsQuery, array $parameters)
    {
        $mealsQuery->whereBetween('price', [$parameters['min_price'], $parameters['max_price']])
            ->orderBy('price', $parameters['orderDirection'] ?? 'ASC');
    }

    protected static function scopeAlphabet($mealsQuery, array $parameters)
    {
        $mealsQuery->whereBetween('name', [$parameters['min_alphabet'], $parameters['max_alphabet']])
            ->orderBy('name', $parameters['orderDirection'] ?? 'ASC');
    }
}
