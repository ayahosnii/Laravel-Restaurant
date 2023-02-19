<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Carbon\Carbon;

class CartComponent extends Component
{

    public $sorting;
    public $pagesize;
    public $haveCouponCode;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;

    public function updateCart()
    {
        $subtotal = Cart::instance('cart')->subtotal();
        $tax = Cart::instance('cart')->tax();
        $discount = $this->discount ?? 0;
        $total = Cart::instance('cart')->total() - $discount;
        $savings = $subtotal + $tax - $total;

        $this->subtotal = $subtotal;
        $this->tax = $tax;
        $this->discount = $discount;
        $this->total = $total;
        $this->savings = $savings;
    }


    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }



    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success_message', 'Items has been removed');
    }

    public function destroyAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function applyCouponCode()
    {

        $coupon = Coupon::where('code', $this->couponCode)->first();

        if (!$coupon) {
            $this->addError('couponCode', 'Invalid coupon code.');
            return;
        }

        if (!$coupon->isValid(Cart::instance('cart'))) {
            $this->addError('couponCode', 'This coupon cannot be applied to the current cart.');
            return;
        }

        $discount = $coupon->discount(Cart::instance('cart')->subtotal());

        Cart::instance('cart')->content()->each(function ($item) use ($discount) {
            $item->price -= $discount / Cart::instance('cart')->count();
        });

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::instance('cart')->subtotal()),
        ]);

        $this->emit('couponApplied');
    }



    public function checkout()
    {

            return redirect()->route('checkout');

    }

    public function cPrice()
    {
        $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal();
    }


    public function render()
    {
        $subtotal = Cart::instance('cart')->subtotal();
        $discount = $this->discount;
        $total = max(0, $subtotal - $discount);
        return view('livewire.cart-component', [
            'subtotal' => $subtotal,
            'discount' => $discount,
            'total' => $total,
        ])->layout('layouts.base');
    }
}
