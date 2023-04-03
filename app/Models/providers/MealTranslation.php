<?php

namespace App\Models\providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['ar_name',	'ar_details', 'meal_id', 'locale'];

    public function meal()
    {
        $this->belongsTo(Meal::class, 'meal_id');
    }
}
