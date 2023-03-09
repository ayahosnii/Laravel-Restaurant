<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pended()
    {
        $orders = Order::where('', '')->get();
        return view('admin.orders.pended');
    }
      public function delivered()
    {
        return view('admin.orders.delivered');
    }
      public function shipped()
    {
        return view('admin.orders.shipped');
    }

    public function all()
    {
        return view('admin.orders.all');
    }

    public function show()
    {
        return view('admin.orders.show');
    }
}
