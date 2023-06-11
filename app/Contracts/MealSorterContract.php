<?php

namespace App\Contracts;

interface MealSorterContract
{
    public function sortMeals($meals, $sorting);
}
