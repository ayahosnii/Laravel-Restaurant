<?php

namespace App\Models\providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table = "branches";
    protected $fillable = ['id','name', 'b_username', 'category_id', 'phone', 'director_password',
'ar_address', 'en_address', 'ar_details', 'en_details' , 'work_hours', 'delivery_price',
'longitude', 'latitude', 'active', 'provider_id', 'image'];

    public function meal()
    {
        return $this->belongsToMany(Meal::class, 'meal_branch', 'provider_id',  'meal_id');
    }
}
