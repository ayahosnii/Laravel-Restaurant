<?php

namespace App\Helpers;

use App\Contracts\MealSorter;
use App\Models\providers\Meal;
use Illuminate\Database\Eloquent\Builder;

class MealSorterForControllers
{
    public static function sortMeals($query, $providerIds, $categoryIds, $sortOption, $mainCategorySlug)
    {
        if ($providerIds) {
           return $query->whereIn('provider_id', $providerIds);
        }
        if ($categoryIds) {
           return $query->whereIn('subcate_id', $categoryIds);
        }

        switch ($sortOption) {
            case 'featured':
                $query->get();
                break;
            case 'alphabet':
                $query->with(['category' => function($query) use ($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('name', 'asc')->get();
                break;
            case 'alphabet-desc':
                $query->with(['category' => function($query) use($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('name', 'desc')->get();
                break;
            case 'price':
                $query->with(['category' => function ($query) use ($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('price', 'asc')->get();
                break;
            case 'price-desc':
                $query->with(['category' => function ($query) use ($mainCategorySlug) {
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('price', 'desc')->get();
                break;
            case 'date-desc':
                $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('created_at', 'desc')->get();
                break;
            case 'date':
                $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }])->orderBy('created_at', 'asc')->get();
                break;
            default:
                $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }]);
        }

        return $query->get();
    }
}
