<?php

namespace App\Models\providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class ProviderRegister extends Authenticatable
{
    use HasFactory;
    protected $table = "provider_registers";
    protected $fillable = ['id','name','user_name','rest_img','images', 'email','address','phone','password','province_id','city_id','category_id','provider-ar-details', 'provider-en-details','online_list','accept_order','accept_online_payment','device_reg_id','phoneactivated','accountactivated','activation_date','activate_phone_hash','order_app_percentage','has_subscriptions','	subscriptions_period','subscriptions_amount','longitude','latitude'];
    //protected $fillable = "provider_registers";

    public function getImagesAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }
    public function getRestImgAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }
    public function meal()
    {
        return $this->belongsToMany(Meal::class, 'meal_branch', 'branch_id',  'meal_id');
    }
}
