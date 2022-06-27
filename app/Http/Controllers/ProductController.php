<?php

namespace App\Http\Controllers;

use App\Models\admin\Product;
use App\Models\Attribute;
use App\Models\Option;
use App\Models\providers\Meal;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsBySlug($slug)
    {
        $data=[];
        $data['product'] = Product::where('slug',$slug) -> first();
        if (!$data['product']){ ///  redirect to previous page with message
        }

        $product_id = $data['product'] -> id ;
          //$product_categories_ids =  $data['product'] -> categories ->pluck('id'); // [1,26,7] get all categories that product on it



        $data['product_attributes'] =  Attribute::whereHas('options' , function ($q) use($product_id){
            $q -> whereHas('product',function ($qq) use($product_id){
                $qq -> where('product_id',$product_id);
            });
        })->get();

        return view('site.products-details', $data);
    }

    public function mealsBySlug($name)
    {
        $data=[];
        $data['meal'] = Meal::where('name',$name) -> first();  //improve select only required fields


        $meal_id = $data['meal'] -> id ;
        //$meal_categories_ids =  $data['meal'] -> categories ->pluck('id'); // [1,26,7] get all categories that meal on it



        /*$data['meal_attributes'] =  Attribute::whereHas('options' , function ($q) use($meal_id){
            $q -> whereHas('meal',function ($qq) use($meal_id){
                $qq -> where('meal_id',$meal_id);
            });
        })->get();*/

        return view('site.meals-details', $data);
    }


    public function findprice(Request $request)
    {
        $data = Option::select('price')
            ->where('id',$request->id)
            ->first();

        return response()->json($data);
    }

}
