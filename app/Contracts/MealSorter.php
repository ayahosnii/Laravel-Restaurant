<?php

namespace App\Contracts;

use App\Models\providers\Meal;

interface MealSorter
{
    public function sortMeals(Meal $meals, string $sortOption);
}
