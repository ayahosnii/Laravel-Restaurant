<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="products";
    protected $fillable=['id', 'name', 'slug', 'description', 'regular_price', 'sale_price', 'SKU', 'stock_status', 'featured', 'quantity', 'image', 'images', 'category_id','subcategory_id', 'active', 'translation_lang', 'translation_of', 'created_at', 'updated_at'];


    public function scopeActive($query){
        return $query ->where('active', 1);
    }


     public function getImageAttribute($val)
     {
         return ($val !== null) ? asset('assets/' . $val) : "";

     }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'stock_status' => 'boolean',
        'active' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */


    /**
     * The attributes that are translatable.
     *
     * @var array
     */

    public function getActive()
    {
        return $this->active == 0 ? 'غير مفعل' : 'مفعل';
    }


    public function hasStock($quantity)
    {
        return $this->quantity >= $quantity;
    }

    public function outOfStock()
    {
        return $this->quantity === 0;
    }

    public function inStock()
    {
        return $this->quantity >= 1;
    }


    public function getTotal($converted = true)
    {
        return $total =  $this->sale_price ?? $this -> regular_price;

    }



    public function scopeSelection($query){
        return $query -> select('id','name', 'slug', 'description', 'regular_price', 'sale_price', 'SKU', 'stock_status', 'featured', 'quantity', 'image', 'images', 'category_id', 'translation_lang', 'translation_of');
    }

    public function category(){
        return $this -> belongsTo('App\Models\admin\MainCategory', 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(self::class, 'translation_of');
    }

}

