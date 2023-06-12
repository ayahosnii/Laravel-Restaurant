<?php

namespace App\Filters;


class CategoryFilter
{
    public function filter($query, $categoryIds)
    {
        if ($categoryIds) {
            $query->whereIn('subcate_id', $categoryIds);
        }
    }
}
