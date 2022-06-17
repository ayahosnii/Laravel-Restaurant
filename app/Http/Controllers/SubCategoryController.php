<?php

namespace App\Http\Controllers;

use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index($sub_category_slug)
    {
        $sub_cat = SubCategory::where('slug', $sub_category_slug)
            ->first();
       $sub_category_id = $sub_cat->id;
        $products = Product::where('subcategory_id', $sub_category_id)->get();

        return view('site.sub_cats', compact('products'));
    }
}
