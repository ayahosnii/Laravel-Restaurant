<?php

namespace App\Sorters;

class AlphabetMealSorterDESC
{
    public function sort($query, $mainCategorySlug)
    {
        $query->with(['category' => function($query) use ($mainCategorySlug){
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('name', 'desc')->get();
    }
}
