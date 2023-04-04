<?php

namespace App\Http\Livewire;

use App\Mail\CouponEmail;
use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use App\Models\admin\Subscriber;
use App\Models\Coupon;
use App\Models\Post;
use App\Models\providers\Meal;
use App\Models\Sale;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class HomeComponent extends Component
{
    public $category_slug;

    public $days;
    public $hours;
    public $minutes;
    public $seconds;
    public $email;

    public function updateTimeValues($diff) {
        $this->days = floor($diff / 86400);
        $this->hours = floor(($diff % 86400) / 3600);
        $this->minutes = floor(($diff % 3600) / 60);
        $this->seconds = $diff % 60;
    }



    public function subscribe()
    {
        if ($this->email == Auth::user()->email) {
            $subscriber = Subscriber::where('email', $this->email)->first();
            if (!$subscriber) {
                $subscriber = new Subscriber();
                $subscriber->email = $this->email;
                $subscriber->user_id = Auth::user()->id;
            }

            $coupon = $subscriber->assignCoupon();

            if ($coupon) {
                Mail::to($subscriber->email)->send(new CouponEmail($coupon));
                session()->flash('success', 'You have successfully subscribed and received a coupon code!');
                $this->email = '';
            } else {
                session()->flash('error', 'Sorry, something went wrong while assigning the coupon code. Please try again later.');
            }
        } else {
            session()->flash('error', 'Sorry, you are not allowed to subscribe with this email address.');
        }
    }



    public function addToCart($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('cart')->add($meal_id, $meal_name,1, $meal_price)->associate('App\Models\providers\Meal');
        Session()->flash('success_message', 'Item added in Cart');
    }


    public function addToWishList($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('wishlist')->add($meal_id, $meal_name,1, $meal_price)->associate('App\Models\providers\Meal');
        $this->emitTo('wish-list-count-component', 'refreshComponent');
    }

    public function removeFromWishList($meal_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $meal_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-count-component', 'refreshComponent');
                return;
            }
        }
    }


    public function render()
    {
        $default_lang = get_default_language();
        $main_cats = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->get();
/*        $sub_cats = SubCategory::where('category_id', $main_cats->id)->get();*/
        $data = [];
        $data['sub_categories'] = SubCategory::parent()->select('id', 'slug')->with(['childeren' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['children' => function($qq) {
                $qq->with(['id', 'parent_id', 'slug']);
            }])->get();
        }]);

        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        //The meals
        $meals = Meal::where('published', '1')->get();

        $lmeals = Meal::orderBy('created_at','DESC')->where('published', '1')
            ->get()->take(8);

        $smeals = Meal::whereHas('sales', function ($query) {
            $query->where('percentage', '>', 0)
            ->where('ends_at', '>', now())
            ->where('published', '1');
        })->inRandomOrder()->take(8)->get();

        $posts = Post::latest()->with('user')->get();

        $sale = Sale::latest()->first();
        $ends_at = Carbon::parse($sale->ends_at);
        $now = Carbon::now();
        $diff = $ends_at->diffInSeconds($now);

        $this->updateTimeValues($diff);
        return view('livewire.home-component', $data, ['categories' => $categories,'main_cats' => $main_cats/*, 'sub_cat' => $sub_cats*/, 'meals' => $meals, 'lmeals' => $lmeals, 'smeals' => $smeals, 'posts' => $posts, 'sale'=>$sale, 'ends_at' => $ends_at])->layout('layouts.base');
    }
}
