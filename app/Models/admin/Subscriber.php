<?php

namespace App\Models\admin;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscribers';
    protected $guarded = [];
    use HasFactory;

    public function assignCoupon()
    {
        $coupon = new Coupon();
        $coupon->code = substr(md5(uniqid(rand(), true)), 0, 8);
        $coupon->type = 'percent';
        $coupon->value = 10;
        $coupon->for = 'general';
        $coupon->start_time = now();
        $coupon->end_time = now()->addMonth();
        $coupon->save();

        $this->id = $this->id ?? $this->save();
        $this->coupons()->attach($coupon->id, ['subscriber_id' => $this->id]);

        return $coupon;
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class);
    }
}
