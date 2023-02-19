<?php

namespace App\Models;

use App\Models\providers\Meal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';
    protected $fillable = ['id', 'code', 'type', 'value', 'for', 'expiry_date', 'provider_id', 'branch_id', 'start_time', 'end_time'];

    public function scopeSelection($query)
    {
        return $query->select('id', 'code', 'type', 'value', 'for', 'expiry_date');
    }
    public function discount($subtotal)
    {
        if ($this->type === 'fixed') {
            return $this->value;
        } elseif ($this->type === 'percent') {
            return round(($this->value / 100) * $subtotal, 2);
        } else {
            return 0;
        }
    }

    public function isValid($cart)
    {
        // Check if the coupon has expired
        if ($this->expires_at && now()->greaterThan($this->expires_at)) {
            return false;
        }

        // Check if the coupon has been used too many times
        if ($this->times_used >= $this->max_uses && $this->max_uses != 0) {
            return false;
        }

        // Check if the coupon can be applied to the current cart
        if (!$this->appliesToCart($cart)) {
            return false;
        }

        return true;
    }

    public function appliesToCart($cart)
    {
        // Check if the coupon applies to any products in the cart
        if ($this->meals()->count() > 0) {
            foreach ($cart as $item) {
                if ($this->meals->contains($item->model->id)) {
                    return true;
                }
            }
            return false;
        }

        // Check if the coupon applies to any categories in the cart
//        if ($this->providers()->count() > 0) {
//            foreach ($cart as $item) {
//                if ($item->model->providers()->whereIn('id', $this->providers->pluck('id'))->exists()) {
//                    return true;
//                }
//            }
//            return false;
//        }

        // If the coupon doesn't apply to specific products or categories, it applies to all
        return true;
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }

    public function providers()
    {
        return $this->belongsToMany(\App\Models\providers\ProviderRegister::class);
    }

}
