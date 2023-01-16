<?php

namespace App\Models\providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Table extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['name', 'guest_number', 'status', 'location', 'provider_id', 'branch_id'];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
