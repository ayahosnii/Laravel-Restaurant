<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;
use function view;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::selection()->get();
        return view('admin.coupon.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(CouponRequest $request)
    {
        try {
            $coupon = Coupon::create([
                'code' => $request->code,
                'type' => $request->type,
                'value' => $request->value,
                'cart_value' => $request->cart_value,
                'expiry_date' => $request->expiry_date,

            ]);

            return redirect()->route('admin.coupons')->with('success', 'Coupon has been applied');
        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('admin.coupons')->with(['error' => 'حدث خطأ برجاء المحاولة لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
    }
}
