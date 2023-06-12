<?php

namespace App\Sorters;

class PriceMealSorter
{
    public function sort($query, $mainCategorySlug)
    {
        $query->with(['category' => function ($query) use ($mainCategorySlug) {
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('price', 'asc')->get();
    }
}
