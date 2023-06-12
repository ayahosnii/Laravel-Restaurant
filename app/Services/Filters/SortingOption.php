<?php

namespace App\Services\Filters;

use App\Contracts\SortingOptionContract;

class SortingOption implements SortingOptionContract
{
    public function filter($sortOption, $mainCategorySlug, $query)
    {
        //Filter using "<select>" tag
        switch ($sortOption) {
            case 'featured':
                $meals = $query->get();
                break;
            case 'alphabet':
                $meals = $this->sort($query, $mainCategorySlug)->orderBy('name', 'asc')->get();
                break;
            case 'alphabet-desc':
                $meals = $this->sort($query, $mainCategorySlug)->orderBy('name', 'desc')->get();
                break;
            case 'price':
                $meals = $this->sort($query, $mainCategorySlug)->orderBy('price', 'asc')->get();
                break;
            case 'price-desc':
                $meals = $this->sort($query, $mainCategorySlug)->orderBy('price', 'desc')->get();
                break;
            case 'date':
                $meals = $this->sort($query, $mainCategorySlug)->orderBy('created_at', 'asc')->get();
                break;
            case 'date-desc':
                $meals = $this->sort($query, $mainCategorySlug)->orderBy('created_at', 'desc')->get();
                break;
            default:
                $meals =  $this->sort($query, $mainCategorySlug)->get();
        }
        return $meals;
    }

    public function sort($query, $mainCategorySlug)
    {
        return $query->with(['category' => function($query) use ($mainCategorySlug){
            $query->where('slug', $mainCategorySlug);
        }]);
    }
}
