<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = [
        'id','parent_id', 'category_id ', 'translation_lang', 'translate_of', 'name', 'slug', 'photo', 'active', 'created_at',	'updated_at'
    ];

    public function getActive()
    {
        return $this -> active == 1 ? 'مفعل' : 'غبر مفعل';
    }

    public function scopeActive($query){
        return $query ->where('active', 1);
    }

    //get all translation category
    public function subcategories()
    {
        return $this->hasMany(self::class, 'translate_of');
    }
    public function scopeDefaultCategory($query)
    {
        return $query -> where('translate_of',0);
    }

    public function products(){
        return $this -> hasMany('App\Models\admin\Product', 'category_id', 'id');
    }

    public function cats(){
        return $this -> hasOne('App\Models\admin\MainCategory', 'category_id', 'id')->where('translation_lang', get_default_language());
    }
}
