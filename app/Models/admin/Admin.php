<?php

namespace App\Models\admin;

use App\Models\CustomerServiceChat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'admins';
    protected $fillable = [
        'name',
        'email',
        'profile_photo_path',
        'password',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function conversations()
    {
        return $this->hasMany(CustomerServiceChat::class, 'admin_id');
    }

    public function receivesBroadcastNotificationsOn()
    {
        return 'App.Models.Admin.admin.'.$this->id;
    }
}
