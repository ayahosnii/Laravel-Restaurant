<?php

namespace App\Models\providers;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use phpDocumentor\Reflection\Types\Self_;

class Category extends Model implements TranslatableContract
{
    use Translatable;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $table = 'categories';
    protected $fillable = ['id', 'images', 'name', 'parent_id', 'slug', 'is_active','created_at','updated_at'];
    protected $hidden = ['translations'];
    protected $with = ['translations'];
    protected $translatedAttributes = ['name'];



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];


    public function scopeParent($query){
        return $query -> whereNull('parent_id');
    }
    public function scopeChild($query){
        return $query -> whereNotNull('parent_id');
    }

    public function getActive(){
        return  $this -> is_active  == 0 ?  'غير مفعل'   : 'مفعل' ;
    }

    public function _parent(){
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function scopeActive($query){
        return $query -> where('is_active',1) ;
    }

    //get all childrens=
    public function childrens(){
        return $this -> hasMany(Self_::class,'parent_id');
    }

    public function meals()
    {
        return $this -> belongsToMany(Meal::class,'product_categories');
    }

}
