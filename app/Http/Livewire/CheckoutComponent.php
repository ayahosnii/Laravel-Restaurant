<?php

namespace App\Http\Livewire;

use App\Models\admin\Admin;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Notifications\NewOrderForProviderNotify;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $ship_to_different;

    public $firstname;
    public $lastname;
    public $province;
    public $address;
    public $city;
    public $zipcode;
    public $mobile;
    public $email;

    public $d_firstname;
    public $d_lastname;
    public $d_province;
    public $d_address;
    public $d_city;
    public $d_zipcode;
    public $d_mobile;
    public $d_email;

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'] ?? floatval(Cart::instance('cart')->subtotal());
        $order->discount = session()->get('checkout')['discount'] ?? 0;
        $order->tax = session()->get('checkout')['tax'] ?? Cart::instance('cart')->tax();
        $order->total = session()->get('checkout')['total'] ?? floatval(Cart::instance('cart')->total());
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->province = $this->province;
        $order->address = $this->address;
        $order->city = $this->city;
        $order->zipcode = $this->zipcode;
        $order->email = $this->email;
        $order->mobile = $this->mobile;
        $order->status = 'ordered';
        $order->is_shipping_different = $this->ship_to_different ? 1:0;
        $order->save();

        $admin = Admin::where('id', 1)->first();


            foreach(Cart::instance('cart')->content() as $item) {

                    $orderItem = new OrderItem();
                    if ($item->associatedModel == 'App\Models\providers\Product'){
                        $orderItem->product_id = $item->id ?? '';
                    } elseif ($item->associatedModel == 'App\Models\providers\Meal') {
                        $orderItem->meal_id = $item->id ?? '';
                    }
                    $orderItem->order_id = $order->id;
                    $orderItem->price = $item->price;
                    $orderItem->quantity = $item->qty;

                $orderItem->save();
                if ($orderItem) {
                    $admin->notify(new NewOrderForProviderNotify($orderItem));
                }

            }


        if($this->ship_to_different)
        {
            $shipping = new Shipping();
            $shipping->firstname = $this->d_firstname;
            $shipping->lastname = $this->d_lastname;
            $shipping->province = $this->d_province;
            $shipping->address = $this->d_address;
            $shipping->city = $this->d_city;
            $shipping->zipcode = $this->d_zipcode;
            $shipping->email = $this->d_email;
            $shipping->mobile = $this->d_mobile;
        }
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
        return redirect()->route('thankyou');
    }
    public function render()
    {
        $user = Auth::user();
        return view('livewire.checkout-component', ['user' => $user])->layout('layouts.base');
    }
}
