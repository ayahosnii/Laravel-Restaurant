<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';
    protected $fillable = ['id', 'code', 'type', 'value', 'cart_value', 'expiry_date'];

    public function scopeSelection($query)
    {
        return $query->select('id', 'code', 'type', 'value', 'cart_value', 'expiry_date');
    }
}
