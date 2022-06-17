<?php

namespace App\Models\admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'premission' //json field
    ];
    public $timestamps = false;

    public function user()
    {
        $this->hasMany(User::class);
    }

    public function getPermissionAttribute($permissions)
    {
        return json_decode($permissions, true);
    }
}
