<?php

namespace App\Models\providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProviderRegister extends Authenticatable
{
    use HasFactory;
    protected $table = "provider_registers";
    public $guarded = [];
    protected $fillable = ['id','name','email','address','phone','password','province_id','city_id','category_id','provider-ar-details', 'provider-en-details','online_list','accept_order','accept_online_payment','device_reg_id','phoneactivated','accountactivated','activation_date','activate_phone_hash','order_app_percentage','has_subscriptions','	subscriptions_period','subscriptions_amount','longitude','latitude'];
    //protected $fillable = "provider_registers";
}
