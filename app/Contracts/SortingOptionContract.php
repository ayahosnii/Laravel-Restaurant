<?php

namespace App\Contracts;

interface SortingOptionContract
{
    public function filter($sortOption, $mainCategorySlug, $query);
    public function sort($query, $mainCategorySlug);
}
