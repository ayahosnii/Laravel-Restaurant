<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    protected $table = 'main_categories';
    protected $fillable = [
        'id', 'translation_lang', 'translate_of', 'name', 'slug', 'photo', 'active', 'created_at',	'updated_at'
    ];

    protected $hidden = ['translation'];


    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    public function scopeSelection($query)
    {

        return $query ->select('id', 'translation_lang', 'name', 'slug', 'photo', 'active', 'translate_of');
    }

    public function getActive()
    {
        return $this -> active == 1 ? 'مفعل' : 'غبر مفعل';
    }

    public function scopeActive($query){
        return $query ->where('active', 1);
    }

    //get all translation category
    public function categories()
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

    public function subcats(){
        return $this -> hasMany('App\Models\admin\SubCategory', 'category_id', 'id')->where('translation_lang', get_default_language());
    }
}
