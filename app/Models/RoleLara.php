<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Models\LaratrustRole;


class RoleLara extends LaratrustRole
{
    public $guarded = [];
    protected $table = "roles_lara";
}
