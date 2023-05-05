<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use App\Models\admin\Governorate;
use App\Models\providers\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::where('provider_id', Auth::guard('providers')->user()->id)->get();
        return view('providers.branch.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = get_default_language();

        $data['cats'] = DB::table("main_categories")->where('translation_lang', get_default_language())->get();

        $data['governorates'] = Governorate::select("id", "governorate_name_" . $language)->get();

        $data['cities'] = DB::table("cities")->select("city_name_" . $language . " AS city", "governorate_id")->get();

        return view('providers.branch.create-branch', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $filePath = "";
            if ($request->has('image')) {
                $filePath = uploadImage('products', $request->image);
            }


                $branch = Branch::create([
                    'name' => $request->bran_name,
                    'b_username' => $request->b_username,
                    'category_id' => $request->category_id,
                    'phone' => $request->phone,
                    'director_password' => Hash::make($request->director_password),
                    'ar_address' => $request->bran_address_ar,
                    'en_address' => $request->bran_address_en,
                    'ar_details' => $request->bran_ar_details,
                    'en_details' => $request->bran_en_details,
                    'work_hours' => $request->work_hours,
                    'delivery_price' => $request->delivery_price,
                    'longitude' => $request->longitude,
                    'latitude' => $request->latitude,
                    'active' => 1,
                    'provider_id' => \Auth::guard('providers')->user()->id,
                    'image' => $filePath,
                ]);

            return redirect()->back();
        }catch (\Exception $ex){
            return $ex;
        }
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\providers\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\providers\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\providers\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\providers\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
