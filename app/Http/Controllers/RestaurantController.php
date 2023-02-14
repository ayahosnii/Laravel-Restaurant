<?php

namespace App\Http\Controllers;

use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\ProviderBranch;
use App\Models\providers\Branch;
use App\Models\providers\Category;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use App\Models\providers\ProviderRegister;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public $sorting;

    protected $stringQuery = ['filterProviders'];

    public $product, $filterProviders, $categoryInputs = [];
    protected $queryString = [
        'categoryInputs' => ['except' => '', 'as' => 'category'],
        //'priceInputs' => ['except' => '', 'as' => 'price']
    ];



    public $pagesize;
    public $category_slug;

    public $min_price;
    public $max_price;

    public $min_alphabet;
    public $max_alphabet;

    public $min_date;
    public $max_date;
    protected $ids;

    public function __construct()
    {
        $this->sorting = "default";
        $this->pagesize = "12";

        $this->min_price=1;
        $this->max_price=1000;

        $this->min_alphabet='a';
        $this->max_alphabet='z';

        $this->min_date=1;
        $this->max_date=10000;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = ProviderRegister::select()->where('has_subscriptions', '1')->get();
        return view('site.restaurant-list', compact('branches'));
    }

    public function filterPrice(Request $request)
    {
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');

        $meals = Meal::whereBetween('price', [$min_price, $max_price])->with('provider')->get();

        return response()->json(['meals' => $meals]);
    }

    public function sortMeals(Request $request)
    {
        $sortOption = $request->input('sort');
        $providerIds = $request->input('providers');
        $categoryIds = $request->input('categories');

        $query = Meal::query();

        if ($providerIds) {
            $query->whereIn('provider_id', $providerIds);
        }
        if ($categoryIds) {
            $query->whereIn('category_id', $categoryIds);
        }

        switch ($sortOption) {
            case 'alphabet':
               $query->with('provider')->orderBy('name', 'asc')->get();
                break;
            case 'alphabet-desc':
               $query->with('provider')->orderBy('name', 'desc')->get();
                break;
            case 'price':
               $query->with('provider')->orderBy('price', 'asc')->get();
                break;
            case 'price-desc':
               $query->with('provider')->orderBy('price', 'desc')->get();
                break;
            case 'date-desc':
               $query->with('provider')->orderBy('created_at', 'desc')->get();
                break;
            case 'date':
               $query->with('provider')->orderBy('created_at', 'asc')->get();
                break;
            default:
                $query->with('provider');
        }
        $meals = $query->get();


        return response()->json([
            'meals' => $meals
        ]);
    }



    public function meals(Request $request)
    {
        $default_lang = get_default_language();
        $min_price = $this->min_price;
        $max_price = $this->max_price;

        if($this->sorting=='date')
        {
            $meals = Meal::where('published', 1)->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="date-desc")
        {
            $meals = Meal::where('published', 1)->whereBetween('id',[$this->min_date,$this->max_date])->orderBy('id', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="price")
        {
            $meals = Meal::where('published', 1)->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'ASC')->paginate($this->pagesize);
//            if ($default_lang == 'ar') {
//                $products = Product::when($this->categoryInputs, function ($q) {
//                    $q->whereIn('category_id', $this->categoryInputs);
//                    /* })
//                     ->when($this->priceInputs, function ($q) {
//                         $q->whereIn('category_id', $this->priceInputs);*/
//
//                })->get();
//            }

        }
        else if ($this->sorting=="price-desc")
        {
            $meals = Meal::where('published', 1)->whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price', 'DESC')->paginate($this->pagesize);

        }
        else if ($this->categoryInputs)
        {
            if ($default_lang == 'en'){
                $meals = Meal::when($this->categoryInputs, function ($q) {
                    $q->whereIn('main_cate_id', $this->categoryInputs);
                    /* })
                     ->when($this->priceInputs, function ($q) {
                         $q->whereIn('category_id', $this->priceInputs);*/

                })->get();
            }else{
                $meals = MealTranslation::where('main_cate_id', $this->categoryInputs)->get();


                $mea = $meals[0]->meal_id;

                $meal = Meal::where('id', $mea)->first();
                $main_cate_id = $meal->category_id;
                $meals = Meal::where('main_cate_id', $main_cate_id)->get();
            }
        }
        else if ($this->sorting=="alphabet")
        {
            $meals = Meal::where('published', 1)->whereBetween('name', [$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=="alphabet-desc")
        {
            $meals = Meal::where('published', 1)->whereBetween('name',[$this->min_alphabet,$this->max_alphabet])->orderBy('name', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->filterProviders)
        {
            $id = $this->filterProviders;

            if ($default_lang == 'en'){
                $meals = Meal::where('provider_id',$id)->get();
            }else {
                $meals = MealTranslation::where('provider_id', $id)->get();
                $filter = $meals->filter(function ($value, $key) {
                    return $value['id'];
                });
                $m = array_values($filter->all())[0];

                $me = $m['product_id'];

                $meal = Meal::where('id', $m)->first();
                $provider_id = $meal->provider_id;
                $meals = Product::where('provider_id', $provider_id)->get();
            }
        }
        else
        {
            $default_lang = get_default_language();

            $meals = Meal::where('published', 1)->get();

        }



        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        $providers = \App\Models\providers\ProviderRegister::get();
        return view('site.restaurant.meals', compact('categories', 'providers', 'meals', 'min_price', 'max_price' ));
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
        $mealItems = Meal::select()->get();
        $meals = Meal::join('categories', 'meals.category_id', '=', 'categories.id')
            ->where('meals.provider_id', $rests_id)
            ->select('meals.name as meal_name', 'meals.*', 'categories.name as category_name')
            ->get()
            ->groupBy('category_name');

        $mealCategories = Meal::select(['meals.*', 'categories.name as category_name'])
            ->join('categories', 'meals.category_id', '=', 'categories.id')
/*            ->groupBy('categories.name')*/
            ->orderBy('categories.name')
            ->get();
        $categories = Category::where('provider_id', $rests_id)->get();
        $branches = Branch::where('provider_id', $rests_id)->get();
        return view('site.restaurant', compact('rests', 'meals','branches', 'categories', 'mealCategories', 'mealItems'));
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
