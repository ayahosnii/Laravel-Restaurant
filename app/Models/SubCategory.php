<?php

namespace App\Models;

use App\Models\admin\MainCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';
    protected $guarded = [''];

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

    public function subcategories()
    {
        return $this->hasMany(self::class, 'translate_of');
    }

    public function maincategory(){
        return $this -> belongsTo(MainCategory::class,'category_id','id');
    }

}
