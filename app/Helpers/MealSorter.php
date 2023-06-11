<?php

namespace App\Helpers;

use App\Models\providers\Meal;

class MealSorter
{
    public static function sortMeals($mealsQuery, $sorting, $minDate, $maxDate, $minPrice, $maxPrice, $minAlphabet, $maxAlphabet)
    {
        if ($sorting == 'date') {
            $mealsQuery->whereBetween('id', [$minDate, $maxDate])->orderBy('id', 'ASC');
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
}
