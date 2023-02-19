<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $fillable = ['phone_number', 'subscribed'];

    public function getPhoneNumberAttribute() {
        return $this->attributes['phone_number'];
    }

    public function setPhoneNumberAttribute($value) {
        $this->attributes['phone_number'] = $value;
    }

    public function scopeActive($query)
    {
        return $query->where('subscribed', 1);
    }
}
