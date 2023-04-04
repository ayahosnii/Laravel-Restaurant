<?php

namespace App\Models\providers;

use App\Models\admin\MainCategory;
use App\Models\ProviderRegister;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Meal extends Model /*implements TranslatableContract*/
{
    public $table = "meals";
    use Translatable;

    public $translatedAttributes = ['name',	'description'];
    public $fillable = ['id','name','slug','image','subcate_id',	'description',	'calories',	'category_id', 'main_cate_id',	'branch_id',
        'price',	'published','providers_id ','provider_id',	'created_at',	'updated_at'];

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class,'maincate_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function provider()
    {
        return $this->belongsTo(ProviderRegister::class, 'provider_id',  'id');
    }

    public function getImageAttribute($val)
    {
        return ($val !== null) ? asset('provider-assets/images/meals/' . $val) : "";

    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class)
            ->where('ends_at', '>=', now());
    }



}
