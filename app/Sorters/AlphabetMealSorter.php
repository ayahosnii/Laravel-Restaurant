<?php

namespace App\Sorters;

class AlphabetMealSorter
{
    public function sort($query, $mainCategorySlug)
    {
        $query->with(['category' => function($query) use ($mainCategorySlug){
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('name', 'asc')->get();
    }
}
