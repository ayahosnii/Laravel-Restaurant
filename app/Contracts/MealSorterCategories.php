<?php

namespace App\Contracts;

interface MealSorterCategories
{
    public function sort($query, $mainCategorySlug);
}
