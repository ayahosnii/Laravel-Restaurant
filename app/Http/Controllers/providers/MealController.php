<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use App\Models\admin\MainCategory;
use App\Models\providers\Branch;
use App\Models\providers\Category;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::where('provider_id', Auth::guard('providers')->user()->id)->get();
        return view('providers.meal.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id','parent_id')->get();
        $main_categories = MainCategory::where('translate_of', 0)->where('translation_lang', get_default_language())->active()->get();
        $branches = Branch::select()->get();
        return view('providers.meal.create-meal', compact('categories', 'branches', 'main_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!$request->has('published'))
            $request->request->add(['published' => 0]);
        else
            $request->request->add(['published' => 1]);

        $filePath = "";
        if ($request->has('image')) {
            $filePath = uploadImage('maincategories', $request->image);
        }

        $meal = Meal::create([
            'image' => $filePath,
            'name' => $request->input('en_name'),
            'price' => $request->price,
            'description' => $request->en_details,
            'calories' => $request->calories,
            'category_id' =>$request->category_id,
            'maincate_id' =>$request->maincate_id,
            'subcate_id' =>$request->sub_cat,
            'providers_id ' =>$request->Auth::guard('providers')->user()->id,
            'branch_id' =>$request->branch_id,
            'published' => $request -> published
        ]);
     MealTranslation::create([
            'name' => $request->input('ar_name'),
            'description' => $request->ar_details,
            'locale' => 'ar',
            'meal_id' => $meal->id
        ]);
    }

    /*
     * 'id','name',	'description',	'calories',	'category_id',	'branch_id',
        'price',	'published',
     * */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\providers\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\providers\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\providers\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\providers\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
