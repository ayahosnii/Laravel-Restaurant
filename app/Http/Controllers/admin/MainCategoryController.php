<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest;
use App\Models\admin\MainCategory;
use Illuminate\Http\Request;
use DB;

class MainCategoryController extends Controller
{
    public function index()
    {
        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->get();

        return view('admin.maincategories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.maincategories.create');
    }


    public function store(MainCategoryRequest $request)
    {
        try {

            $main_categories = collect($request->category);

            $filter = $main_categories->filter(function ($value, $key) {
                return $value['abbr'] == get_default_language();
            });

            $default_category = array_values($filter->all()) [0];

            $filePath = "";
            if ($request->has('photo')) {
                $filePath = uploadImages('maincategories', $request->photo);
            }

            DB::beginTransaction();
            $default_category_id = MainCategory::insertGetId([
                'translation_lang' => $default_category['abbr'],
                'translate_of' => 0,
                'name' => $default_category['name'],
                'slug' => $default_category['name'],
                'photo' => $filePath
            ]);

            $categories = $main_categories->filter(function ($value, $key) {
                return $value['abbr'] != get_default_language();
            });

            if (isset($categories) && $categories->count()) {
                $categories_arr = [];
                foreach ($categories as $category) {
                    $categories_arr[] = [
                        'translation_lang' => $category['abbr'],
                        'translate_of' => 0,
                        'name' => $category['name'],
                        'slug' => $category['name'],
                        'photo' => $filePath
                    ];
                }
                    MainCategory::insert($categories_arr);
                }
                DB::commit();
                return redirect() -> route('admin.maincategories')->with(['success' => 'تم الحفظ بنجاح']);
            }catch (\Exception $ex) {
                DB::rollback();
                return $ex;
                return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطأ برجاء المحاولة لاحقا']);
            }
         }

    public function show(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainCategory $mainCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCategory $mainCategory)
    {
        //
    }
}
