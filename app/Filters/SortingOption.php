<?php

namespace App\Filters;

class SortingOption
{
    public function filter($sortOption, $mainCategorySlug, $query)
    {
        //Filter using "<select>" tag
        switch ($sortOption) {
            case 'featured':
                $meals = $query->get();
                break;
            case 'alphabet':
                $meals = $this->alphabet($query, $mainCategorySlug);
                break;
            case 'alphabet-desc':
                $meals = $this->alphabetDesc($query, $mainCategorySlug);
                break;
            case 'price':
                $meals = $this->price($query, $mainCategorySlug);
                break;
            case 'price-desc':
                $meals = $this->priceDesc($query, $mainCategorySlug);
                break;
            case 'date-desc':
                $meals = $this->dateDesc($query, $mainCategorySlug);
                break;
            case 'date':
                $meals = $this->date($query, $mainCategorySlug);
                break;
            default:
                $meals = $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }]);
        }
        return $meals;
    }

    public function alphabet($query, $mainCategorySlug)
    {
        return $query->with(['category' => function($query) use ($mainCategorySlug){
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('name', 'asc')->get();
    }

    public function alphabetDesc($query, $mainCategorySlug)
    {
        return $query->with(['category' => function($query) use($mainCategorySlug) {
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('name', 'desc')->get();
    }

    public function price($query, $mainCategorySlug)
    {
        return $query->with(['category' => function ($query) use ($mainCategorySlug) {
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('price', 'asc')->get();
    }


    public function priceDesc($query, $mainCategorySlug)
    {
        return $query->with(['category' => function ($query) use ($mainCategorySlug) {
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('price', 'desc')->get();
    }

    public function date($query, $mainCategorySlug)
    {
        return $query->with(['category' => function ($query) use ($mainCategorySlug) {
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('created_at', 'asc')->get();
    }

    public function dateDesc($query, $mainCategorySlug)
    {
        return  $query->with(['category' => function($query) use($mainCategorySlug){
            $query->where('slug', $mainCategorySlug);
        }])->orderBy('created_at', 'desc')->get();
    }
}
