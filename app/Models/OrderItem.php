<?php

namespace App\Models;

use App\Models\admin\Product;
use App\Models\providers\Meal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table="order_items";
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class, 'meal_id');
    }

}
