<?php

namespace App\Sorters;

class DateMealSorterDESC
{
    public function sort($query, $mainCategorySlug)
    {
        $query->with(['category' => function ($query) use ($mainCategorySlug) {
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('created_at', 'desc')->get();
    }
}
