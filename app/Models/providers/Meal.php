<?php

namespace App\Models\providers;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Meal extends Model //implements TranslatableContract
{
    public $table = "meals";
    //use Translatable;

    //public $translatedAttributes = ['name',	'description'];
    public $fillable = ['id','name',	'description',	'calories',	'category_id', 'maincate_id',	'branch_id',
        'price',	'published','providers_id ',	'created_at',	'updated_at'];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id',  'id');
    }

    public function provider()
    {
        return $this->belongsTo(ProviderRegister::class, 'providers_id',  'id');
    }

}
