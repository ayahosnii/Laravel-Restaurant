<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\ProductTranslation;
use App\Models\providers\Meal;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $default_lang = get_default_language();
        $products = Meal::select()->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = MainCategory::where('translate_of', 0)->active()->get();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            if (!$request->has('featured'))
                $request->request->add(['featured' => 0]);
            else
                $request->request->add(['featured' => 1]);


            $products = collect($request->product);

            $filter = $products->filter(function($value, $key) {
                return $value['abbr'] == get_default_language();
            });


            $default_products = array_values($filter->all()) [0];

            $filePath = "";
            if ($request->has('image')) {
                $filePath = uploadImages('products', $request->image);
            }
/**/

            DB::beginTransaction();
            $default_product_id = Product::insertGetId([
                'name' => $default_products['name'],
                'slug' => strtolower($default_products['name']),
                'description' => $default_products['description'],
                'regular_price' => $request->regular_price,
                'sale_price' => $request->sale_price,
                'SKU' => $request->SKU,
                'stock_status' => $request->stock_status,
                'active' => $default_products['active'],
                'featured' => $request->featured,
                'category_id' => $default_products['category_id'],
                'translation_lang' => $default_products['abbr'],
                'translation_of' => 0,
                'image' => $filePath,
            ]);

            $abbr = '';
             $products->filter(function($value, $key) {
                return $abbr = $value['abbr'] != get_default_language();
            });

            $prods = $products->filter(function($value, $key) {
                return $value['abbr'] != get_default_language();
            });

            if(isset($prods) && $prods->count()) {
                $prods_arr = [];
                foreach ($prods as $prod) {
                    $prods_arr[] = [
                        'name' => $prod['name'],
                        'description' => $prod['description'],
                        'locale' => $prod['abbr']
                    ];
                }
                ProductTranslation::insert($prods_arr);
            }
            DB::commit();
            return redirect() -> route('admin.products')->with(['success' => 'تم الحفظ بنجاح']);
        }catch (\Exception $ex) {
            DB::rollback();
            return $ex;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function changeStatus($id)
    {
        try {
            $product = Meal::find($id);
            if (!$product)
                return redirect()->route('admin.meals')->with(['error' => 'هذا المنتج غير موجود']);

            $status = $product->published == '0' ? '1' : '0';

            $product->update(['published' => $status]);
            return redirect()->route('admin.meals')->with(['success' => 'تم تغيير حالة المنتج بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.meals')->with(['error' => 'حدث خطأ برجاء المحاولة لاحقا']);
        }
    }

    public function acceptMeals()
    {
        $meals = Meal::where('published', '0')->get();
        return view('admin.products.accept', compact('meals'));
    }
}
