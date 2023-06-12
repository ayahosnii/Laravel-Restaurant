<?php

namespace App\Sorters;

class DateMealSorter
{
    public function sort($query, $mainCategorySlug)
    {
        $query->with(['category' => function ($query) use ($mainCategorySlug) {
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('created_at', 'asc')->get();
    }
}
