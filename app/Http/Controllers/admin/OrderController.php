<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pended()
    {
        $orders = Order::where('status', 'ordered')->paginate();
        return view('admin.orders.pended', compact('orders'));
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

    public function updateStatus(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['success' => false, 'message' => 'Order not found']);
        }

        $status = $request->input('status');
        $order->status = $status;
      $order->save();

      return response()->json(['success' => 'true']);
    }
}
