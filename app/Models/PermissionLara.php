<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Models\LaratrustPermission;

class PermissionLara extends LaratrustPermission
{
    public $guarded = [];
    protected $table = "permissions_lara";
}
