<?php

namespace App\Http\Controllers;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $default_lang = get_default_language();
        $main_cats = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->get();
        /*        $sub_cats = SubCategory::where('category_id', $main_cats->id)->get();*/
        $data = [];
        $data['sub_categories'] = SubCategory::parent()->select('id', 'slug')->with(['childeren' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['children' => function($qq) {
                $qq->with(['id', 'parent_id', 'slug']);
            }])->get();
        }]);

        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $products = Product::where('translation_lang', $default_lang)
            ->where('active', 1)->get();

        $lproducts = Product::orderBy('created_at','DESC')
            ->where('translation_lang', $default_lang)->where('active', 1)->get()->take(8);

        $sproducts = Product::where('sale_price', '>', 0)
            ->where('translation_lang', $default_lang)
            ->where('active', 1)
            ->inRandomOrder()->get()->take(8);
        $posts = Post::latest()->with('user')->get();
        return view('site.home-page', compact('categories', 'products', 'lproducts', 'sproducts', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
