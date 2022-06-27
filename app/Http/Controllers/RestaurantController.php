<?php

namespace App\Http\Controllers;

use App\Models\ProviderRegister;
use App\Models\providers\Branch;
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
        $branches = \App\Models\providers\ProviderRegister::select()->get();
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
        $meals = Meal::where('providers_id', $rests_id)->get();
        return view('site.restaurant', compact('rests', 'meals'));
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
