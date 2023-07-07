<?php

namespace App\Http\Livewire;

use App\Models\admin\Admin;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Notifications\NewOrderForProviderNotify;
use App\Services\Payment\PaymentDashboard;
use App\Services\Payment\StripePayment;
use App\Services\Payment\StripePaymentProcessor;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Pusher\Pusher;
use Stripe\Charge;
use Stripe\Exception\ApiConnectionException;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\AuthenticationException;
use Stripe\Exception\CardException;
use Stripe\Exception\InvalidRequestException;
use Stripe\Exception\RateLimitException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CheckoutComponent extends Component
{
    public $ship_to_different;
    public $discount;
    public $payMethod;
    public $showInput = false;
    public $paymentIntentId;


    public $firstname;
    public $lastname;
    public $province;
    public $address;
    public $city;
    public $latitude;
    public $longitude;
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
    protected $listeners = ['placeOrder'];


    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ];
    }



    public function updatedPayMethod($value)
    {
        if ($value === 'cash') {
            $this->showInput = false;
        } else {
            $this->showInput = true;
        }
    }

    public function placeOrder()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $intent = \Stripe\PaymentIntent::create([
                'amount' => Cart::instance('cart')->total() * 100,
                'currency' => 'usd',
            ]);
            $this->paymentIntentId = $intent->client_secret;
        } catch (ApiErrorException $e) {
            session()->flash('stripe_error', $e->getMessage());
        }

        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);


        $this->createOrder();

        if($this->ship_to_different)
        {
            $this->shipToDifferent();
        }


        $this->processPayment();
        return redirect()->route('thankyou');
    }
    private function createOrder()
    {
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
        $order->latitude = $this->latitude;
        $order->longitude = $this->longitude;
        $order->status = 'ordered';
        $order->is_shipping_different = $this->ship_to_different ? 1:0;
        $order->save();
        $data = ['order_id' => $order->id];
        //Pusher::trigger('order-orders', 'new-order', $data);

        $admin = Admin::where('id', 1)->first();


        foreach(Cart::instance('cart')->content() as $item) {

            $orderItem = new OrderItem();
            $orderItem->meal_id = $item->id ?? '';
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;

            $orderItem->save();
            if ($orderItem) {
                $admin->notify(new NewOrderForProviderNotify($orderItem));
            }

        }

    }

    private function shipToDifferent()
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

    private function processPayment()
    {
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
        if (session()->has('coupon')) {
            $coupon = Coupon::where('code', session()->get('coupon')['name'])->first();
            if ($coupon) {
                $coupon->times_used = $coupon->times_used + 1;
                $coupon->save();
            }
        }
    }
    public function render()
    {
        $user = Auth::user();
        $subtotal = Cart::instance('cart')->subtotal();
        $discount = $this->discount;
        $total = max(0, $subtotal - $discount);
        return view('livewire.checkout-component', [
            'subtotal' => $subtotal,
            'total' => $total,
            'user' => $user
        ])->layout('layouts.base');
    }
}
