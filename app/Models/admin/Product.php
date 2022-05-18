<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="products";
    protected $fillable=['id', 'name', 'slug', 'short_description', 'description', 'regular_price', 'sale_price', 'SKU', 'stock_status', 'featured', 'quantity', 'image', 'images', 'category_id', 'active', 'translation_lang', 'translation_of', 'created_at', 'updated_at'];


    protected function scopeActive($query) {
        $query -> where ('active,1');
    }

     public function getImageAttribute($val)
     {
         return ($val !== null) ? asset('assets/' . $val) : "";

     }



    public function scopeSelection($query){
        return $query -> select('id','name', 'slug', 'short_description', 'description', 'regular_price', 'sale_price', 'SKU', 'stock_status', 'featured', 'quantity', 'image', 'images', 'category_id', 'translation_lang', 'translation_of');
    }

    public function category(){
        return $this -> belongsTo('App\Models\admin\MainCategory', 'category_id', 'id');
    }

    public function getActive()
    {
        return $this -> active == 1 ? ' غبر مفعل ' : ' مفعل';
    }

    public function products()
    {
        return $this->hasMany(self::class, 'translation_of');
    }

}

