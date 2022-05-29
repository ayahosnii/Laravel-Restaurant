<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function asset;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';
    protected $guarded = [''];

    public function scopeParent($query){
        return $query ->whereNull('parent_id');
    }

    public function scopeChild($query){
        return $query ->whereNull('parent_id');
    }

    //get all children

    public function childrens()
    {
        return $this->HasMany(SubCategory::class, 'parent_id');
    }


    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";
    }

    public function Scopeselection($query){
        return $query -> select();
    }

    public function getActive()
    {
        return $this -> active == 1 ? 'مفعل' : 'غبر مفعل';
    }

    public function _parent()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function subcategories()
    {
        return $this->hasMany(self::class, 'translate_of');
    }

    public function maincategories(){
        return $this -> belongsTo(MainCategory::class,'category_id','id');
    }

}
