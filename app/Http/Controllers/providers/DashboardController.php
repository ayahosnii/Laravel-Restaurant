<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use App\Models\admin\City;
use App\Models\providers\Branch;
use App\Models\providers\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::select()->where('provider_id', Auth::guard('providers')->user()->id)->first();
        return view('providers.dashboard', compact('branches'));
    }

    public function get_sub_categories(Request $request)
    {

        $validator = Validator::make($request->all());

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json(['status' => false, 'errNum' => (int)$error]);
        }
        $sub_cats = DB::table("sub_categories")
            ->where("category_id", $request->input("maincate_id"))
            ->where("translation_lang", get_default_language())
            ->where("active", "1")
            ->select()->get();

        return response()->json(['status' => true, 'errNum' => 0,  "sub_cats" => $sub_cats]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_cities($id)
    {
        $cities = City::where('governorate_id', $id)
            ->select('id', 'city_name_en')->get();
        return response()->json($cities);
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
     * @param  \App\Models\providers\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\providers\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\providers\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\providers\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
