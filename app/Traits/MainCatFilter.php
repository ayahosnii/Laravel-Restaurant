<?php

namespace App\Traits;

trait MainCatFilter
{
    public function filterByProviderIds($query, $providerIds) {
        if ($providerIds) {
            $query->whereIn('provider_id', $providerIds);
        }
    }

    public function filterByCategoryIds($query, $categoryIds) {
        if ($categoryIds) {
            $query->whereIn('subcate_id', $categoryIds);
        }
    }

    public function getSortingOption($sortOption, $mainCategorySlug, $query)
    {
        //Filter using "<select>" tag
        switch ($sortOption) {
            case 'featured':
                $query->get();
                break;
            case 'alphabet':
                $meals = $query->with(['category' => function($query) use ($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('name', 'asc')->get();
                break;
            case 'alphabet-desc':
                $meals = $query->with(['category' => function($query) use($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('name', 'desc')->get();
                break;
            case 'price':
                $meals = $query->with(['category' => function ($query) use ($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('price', 'asc')->get();
                break;
            case 'price-desc':
                $meals = $query->with(['category' => function ($query) use ($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('price', 'desc')->get();
                break;
            case 'date-desc':
                $meals = $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('created_at', 'desc')->get();
                break;
            case 'date':
                $meals = $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('created_at', 'asc')->get();
                break;
            default:
                $meals = $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }]);
        }
        return $meals;
    }
}
