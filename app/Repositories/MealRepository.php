<?php

namespace App\Repositories;

use App\Models\admin\MainCategory;
use App\Models\providers\Meal;

class MealRepository
{
    public function getFilteredMeals(
        $categoryInputs,
        $sorting,
        $minDate,
        $maxDate,
        $minPrice,
        $maxPrice,
        $minAlphabet,
        $maxAlphabet,
        $pagesize
    ) {
        $mealsQuery = Meal::query();

        // Apply filters
        if ($categoryInputs) {
            $mealsQuery = $this->applyCategoryFilter($mealsQuery, $categoryInputs);
        }

        // Apply sorting
        $mealsQuery = $this->applySorting($mealsQuery, $sorting, $minDate, $maxDate, $minPrice, $maxPrice, $minAlphabet, $maxAlphabet);

        // Retrieve paginated meals
        $meals = $mealsQuery->paginate($pagesize);

        // Retrieve categories
        $categories = MainCategory::where('status', 1)->get();

        return compact('meals', 'categories');
    }

    public function getMeals($pagesize)
    {
        $meals = Meal::paginate($pagesize);
        $categories = MainCategory::where('status', 1)->get();

        return compact('meals', 'categories');
    }

    private function applyCategoryFilter($query, $categoryInputs)
    {
        return $query->whereIn('main_cate_id', $categoryInputs);
    }

    private function applySorting($query, $sorting, $minDate, $maxDate, $minPrice, $maxPrice, $minAlphabet, $maxAlphabet)
    {
        if ($sorting == 'date') {
            $query->whereBetween('id', [$minDate, $maxDate])->orderBy('id', 'ASC');
        } elseif ($sorting == 'date-desc') {
            $query->whereBetween('id', [$minDate, $maxDate])->orderBy('id', 'DESC');
        } elseif ($sorting == 'price') {
            $query->whereBetween('price', [$minPrice, $maxPrice])->orderBy('price', 'ASC');
        } elseif ($sorting == 'price-desc') {
            $query->whereBetween('price', [$minPrice, $maxPrice])->orderBy('price', 'DESC');
        } elseif ($sorting == 'alphabet') {
            $query->whereBetween('name', [$minAlphabet, $maxAlphabet])->orderBy('name', 'ASC');
        } elseif ($sorting == 'alphabet-desc') {
            $query->whereBetween('name', [$minAlphabet, $maxAlphabet])->orderBy('name', 'DESC');
        }

        return $query;
    }
}
