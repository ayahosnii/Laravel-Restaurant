<?php

namespace App\Helpers;

use App\Models\providers\Meal;

class MealSorterForLivewire
{
    public static function sortMeals($mealsQuery, array $parameters)
    {
        dd($parameters);
        if ($sorting == 'date') {
           //$this->scopeDate($mealsQuery, array $parameters);
        } elseif ($sorting == 'date-desc') {
            $mealsQuery->whereBetween('id', [$minDate, $maxDate])->orderBy('id', 'DESC');
        } elseif ($sorting == 'price') {
            $mealsQuery->whereBetween('price', [$minPrice, $maxPrice])->orderBy('price', 'ASC');
        } elseif ($sorting == 'price-desc') {
            $mealsQuery->whereBetween('price', [$minPrice, $maxPrice])->orderBy('price', 'DESC');
        } elseif ($sorting == 'alphabet') {
            $mealsQuery->whereBetween('name', [$minAlphabet, $maxAlphabet])->orderBy('name', 'ASC');
        } elseif ($sorting == 'alphabet-desc') {
            $mealsQuery->whereBetween('name', [$minAlphabet, $maxAlphabet])->orderBy('name', 'DESC');
        }

        return $mealsQuery;
    }

    public function scopeDate($mealsQuery, array $parameters)
    {
        $mealsQuery->whereBetween('id', [$parameters['min_date'], $parameters['max_date']])
            ->orderBy('id', $parameters['orderDirection'] ?? 'ASC');
    }

    protected static function scopePrice(Builder $query, array $parameters)
    {
        $query->whereBetween('price', [$parameters['min_price'], $parameters['max_price']])
            ->orderBy('price', $parameters['orderDirection'] ?? 'ASC');
    }

    protected static function scopeAlphabet(Builder $query, array $parameters)
    {
        $query->whereBetween('name', [$parameters['min_alphabet'], $parameters['max_alphabet']])
            ->orderBy('name', $parameters['orderDirection'] ?? 'ASC');
    }
}
