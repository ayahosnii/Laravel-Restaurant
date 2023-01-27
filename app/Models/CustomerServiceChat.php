<?php

namespace App\Models;

use App\Models\admin\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerServiceChat extends Model
{
    use HasFactory;

    protected $table = 'customer_service_chats';
    protected $guarded = [];

//    public function messages()
//    {
//        return $this->hasMany(Cus::class);
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function messages()
    {
        return $this->hasMany(CustomerServiceMessages::class, 'conversation_id');
    }
}
