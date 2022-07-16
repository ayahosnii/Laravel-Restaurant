<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderBranch extends Model
{
    use HasFactory;
    protected $table = "providers_branches";
    protected $fillable = ['id', 'providers_id', 'branches_id '];
}
