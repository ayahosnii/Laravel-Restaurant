<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'starts_at',
        'ends_at',
        'meal_id',
        'is_flash_sale',
        'percentage',
    ];

    public function getIsActiveAttribute()
    {
        $now = Carbon::now();
        return $this->start_date <= $now && $this->end_date >= $now;
    }
    public function sales()
    {
        return $this->belongsToMany(Sale::class)->withPivot('discount_percentage');
    }
}
