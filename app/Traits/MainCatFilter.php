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
                return new FeaturedMealSorter();
            case 'alphabet':
                return new AlphabetMealSorter();
            case 'alphabet-desc':
                return new AlphabetMealSorterDESC();
            case 'price':
                return new PriceMealSorter();
            case 'price-desc':
                return new PriceMealSorterDESC();
            case 'date':
                return new DateMealSorter();
            case 'date-desc':
                return new DateMealSorterDESC();
            default:
                throw new \InvalidArgumentException('Invalid sort option');
        }
    }
}
