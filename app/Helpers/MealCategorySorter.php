<?php

namespace App\Helpers;

use App\Models\admin\MainCategory;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;

class MealCategorySorter
{
    public static function filterByCategory($mealsQuery, $categoryInputs)
    {
        $default_lang = get_default_language();

        if ($categoryInputs) {
            if ($default_lang == 'en') {
                $mealsQuery->whereIn('main_cate_id', $categoryInputs);
            } else {
                $main = MainCategory::whereIn('id', $categoryInputs)->first();
                $mealTranslation = MealTranslation::where('main_cate_id', $main->translate_of)->first();

                if ($mealTranslation) {
                    $meal = Meal::find($mealTranslation->meal_id);

                    if ($meal) {
                        $mealsQuery->where('category_id', $meal->category_id);
                    }
                }
            }
        }

        return $mealsQuery;
    }

}
