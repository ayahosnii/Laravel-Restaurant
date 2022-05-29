<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\MainCategory;
use App\Models\admin\SubCategory;
use DB;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subcategories=  SubCategory::where('translation_lang',get_default_language())->selection()->get();
        return view('admin.subcategories.index', compact('subcategories'));
    }


    public function create()
    {
        $default_lang = get_default_language();
        $main_cats = MainCategory::selection()->where('translation_lang', $default_lang)-> get();

        return view('admin.subcategories.create', compact('main_cats'));
    }


    public function store(Request $request)
    {
        try {
            $sub_cate = collect($request -> subcategory);

            $sub = $sub_cate->filter(function ($value, $key){
                return $value['abbr'] == get_default_language();
            });

            $default_subcate = array_values($sub->all()) [0];

            $filePath = "";
            if ($request->has('photo')) {
                $filePath = uploadImages('subcategories', $request->photo);
            }

            DB::beginTransaction();
            $sub_id = SubCategory::insertGetId([
                'parent_id' => 0,
                'category_id' => $request->category_id,
                'translation_lang' => $default_subcate['abbr'],
                'translate_of' => 0,
                'name' => $default_subcate['name'],
                'slug' => $default_subcate['name'],
                'photo' => $filePath
                ]);

            $sub_excepts = $sub_cate->filter(function ($value, $key) {
                return $value['abbr'] != get_default_language();
            });

            if (isset($sub_excepts) && $sub_excepts->count()) {
                $sub_arr = [];
                foreach ($sub_excepts as $sub_except) {
                    $sub_arr[] = [
                        'parent_id' => 0,
                        'category_id' => $request->category_id,
                        'translation_lang' => $sub_except['abbr'],
                        'translate_of' => $sub_id,
                        'name' => $sub_except['name'],
                        'slug' => $sub_except['name'],
                        'photo' => $filePath
                    ];
                }
                SubCategory::insert($sub_arr);
                DB::commit();
            }
            return redirect()->route('admin.subcategories')->with(['success' => 'تم أضافة قسم فرعي بنجاح بنجاح']);
        }catch (\Exception $ex){
            DB::rollback();
            return redirect()->route('admin.subcategories')->with(['error' => 'حدث خطأ برجاء المحاولة لاحقا']);
        }
    }

    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }

    public function changeStatus(SubCategory $subCategory)
    {
        //
    }
}
