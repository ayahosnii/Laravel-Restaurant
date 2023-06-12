<?php

namespace App\Filters;


use App\Contracts\Filter;

class CategoryFilter implements Filter
{
    public function filter($query, $categoryIds)
    {
        if ($categoryIds) {
            $query->whereIn('subcate_id', $categoryIds);
        }
    }
}
