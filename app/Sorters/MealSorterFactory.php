<?php

namespace App\Sorters;

use App\Contracts\MealSorterCategories;

class MealSorterFactory
{
    public static function create($sortOption): MealSorterCategories
    {
        switch ($sortOption) {
            case 'featured':
                $meals = new FeaturedMealSorter();
            case 'alphabet':
                return new AlphabetMealSorter();
            case 'price':
                return new PriceMealSorter();
            case 'date':
                return new DateMealSorter();
            default:
                throw new \InvalidArgumentException('Invalid sort option');
        }
    }
}
