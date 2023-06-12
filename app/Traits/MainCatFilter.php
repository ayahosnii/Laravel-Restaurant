<?php

namespace App\Traits;

use App\Sorters\AlphabetMealSorter;
use App\Sorters\AlphabetMealSorterDESC;
use App\Sorters\DateMealSorter;
use App\Sorters\DateMealSorterDESC;
use App\Sorters\FeaturedMealSorter;
use App\Sorters\PriceMealSorter;
use App\Sorters\PriceMealSorterDESC;

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
                $meals =  new FeaturedMealSorter();
                break;
            case 'alphabet':
                $meals =  new AlphabetMealSorter();
                break;
            case 'alphabet-desc':
                $meals =  new AlphabetMealSorterDESC();
                break;
            case 'price':
                $meals =  new PriceMealSorter();
                break;
            case 'price-desc':
                $meals =  new PriceMealSorterDESC();
                break;
            case 'date':
                $meals =  new DateMealSorter();
                break;
            case 'date-desc':
                $meals =  new DateMealSorterDESC();
                break;
            default:
                $meals = $query->with(['category' => function($query) use($mainCategorySlug){
                    $query->where('slug', $mainCategorySlug);
                }]);
        }
        return $meals;
        }

}
