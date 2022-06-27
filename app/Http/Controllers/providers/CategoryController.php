<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use App\Http\Enumerations\CategoryType;
use App\Http\Requests\CategoryRequest;
use App\Models\providers\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id','parent_id')->get();
        return view('providers.category.create-categories', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            //validation

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $filePath = "";
            if ($request->has('image')) {
                $filePath = uploadImage('maincategories', $request->image);
            }

            if ($request -> type == CategoryType::mainCategory)
            {

            $category = Category::create([
                'images' => $filePath,
                'name' => $request->name,
                'slug' => $request->slug,
                'parent_id' =>$request->request->add(['parent_id' => null]),
                'is_active' => $request -> is_active
            ]);
            } else {
                $category = Category::create([
                    'images' => $request->image,
                    'name' => $request->name,
                    'slug' => $request->slug,
                    'parent_id' =>$request->parent_id,
                    'is_active' => $request -> is_active
                ]);
            }

            $request->except('_token');


            return redirect()->route('provider.dashboard')->with(['success' => 'تم ألاضافة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\providers\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\providers\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\providers\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\providers\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
