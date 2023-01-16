<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderHistoryComponent extends Component
{
//    public $order_id;
//
//    public function mount($order_id)
//    {
//        $this->order_id = $order_id;
//    }

    public function cancelOrder($order_id)
    {
        $cancel = Order::find($order_id, 'id');
        $cancel->status = 'canceled';
        $cancel->save();
    }

    public function orderOrder($order_id)
    {
        $order = Order::find($order_id, 'id');
        $order->status = 'ordered';
        $order->save();
    }

    public function render()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', Auth::user()->id)->orderByRaw('status DESC')->get();
        return view('livewire.order-history-component', ['orders' => $orders, 'user' => $user])->layout('layouts.base');
    }
}
