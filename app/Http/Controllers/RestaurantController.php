<?php

namespace App\Http\Controllers;

use App\Models\ProviderBranch;
use App\Models\ProviderRegister;
use App\Models\providers\Branch;
use App\Models\providers\Category;
use App\Models\providers\Meal;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = ProviderRegister::select()->get();
        return view('site.restaurant-list', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_rest($user_name)
    {
        $rests = \App\Models\providers\ProviderRegister::where('user_name', $user_name)->firstOrFail();
        $rests_user_name = $rests->user_name;
        $rests_id = $rests->id;
        $meals = Meal::where('provider_id', $rests_id)->get();
        $mealCategories = Meal::select(['meals.*', 'categories.name as category_name'])
            ->join('categories', 'meals.category_id', '=', 'categories.id')
/*            ->groupBy('categories.name')*/
            ->orderBy('categories.name')
            ->get();
        $categories = Category::where('provider_id', $rests_id)->get();
        $branches = Branch::where('provider_id', $rests_id)->get();
        return view('site.restaurant', compact('rests', 'meals','branches', 'categories', 'mealCategories'));
    }

  public function get_branch($b_branch)
    {
        $branches = Branch::where('b_username', $b_branch)->firstOrFail();
        //$branches_username= $rests->b_username;
        $branches_id = $branches->id;
        $prov_branch = ProviderBranch::select()->first();
        /*$prov_branch_user = ProviderBranch::where('branches_id', $prov_branch->branches_id)->first();
        $rests_user = \App\Models\providers\ProviderRegister::where('id', $prov_branch_user->providers_id)->first();
        //$rests_id = $rests_user->id;
        $rests_provider = \App\Models\providers\ProviderRegister::where('id', $rests_user->id)->get();*/
        $meals = Meal::where('branch_id', $branches_id)->get();
        //$categories = Category::where('provider_id', $rests_provider->id)->get();
        return view('site.branch', compact( 'meals','branches'));
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
