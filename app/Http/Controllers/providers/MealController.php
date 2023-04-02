<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use App\Models\admin\Admin;
use App\Models\admin\MainCategory;
use App\Models\providers\Branch;
use App\Models\providers\Category;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use Berkayk\OneSignal\OneSignalFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Berkayk\OneSignal;
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
        $categories = Category::where('provider_id',Auth::guard('providers')->user()->id)->get();
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
            $filePath = uploadImage('providers-meals', $request->image);
        }


        $meal = Meal::create([
            'image' => $filePath,
            'name' => $request->input('en_name'),
            'price' => $request->price,
            'description' => $request->en_details,
            'calories' => $request->calories,
            'category_id' =>$request->category_id,
            'main_cate_id' => $request->maincate_id,
            //'subcate_id' =>$request->sub_cat,
            'provider_id' => Auth::guard('providers')->user()->id,
            'branch_id' =>$request->branch_id ?? NULL,
            'published' => 0
        ]);
     MealTranslation::create([
            'name' => $request->input('ar_name'),
            'description' => $request->ar_details,
            'locale' => 'ar',
            'meal_id' => $meal->id
        ]);

     $admins = Admin::get();
     foreach ($admins as $admin){
         OneSignalFacade::sendNotificationToAll(
             "A new meal has been added by a provider.",
             $admin->onesignal_id,
             $url = null,
             $data = null,
             $buttons = null,
             $schedule = null
         );
     }

     return redirect()->route('meals');
    }


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
