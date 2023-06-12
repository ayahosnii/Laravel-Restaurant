<?php

namespace App\Sorters;

class FeaturedMealSorter
{
    public function sort($query, $mainCategorySlug)
    {
        $query->get();
    }
}
