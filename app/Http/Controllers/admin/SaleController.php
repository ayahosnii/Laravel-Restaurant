<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaleRequest;
use App\Models\providers\Meal;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::get();
        return view('admin.sale.index', compact('sales'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sales = Sale::get();
        $meals = Meal::get();
        return view('admin.sale.create', compact('sales', 'meals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {
        try {

            $sale =  Sale::create([
                'name' => $request->name,
                'percentage' => $request->percentage,
                'is_flash_sale' => $request->is_flash_sale ?? 0,
                'starts_at' => date('Y-m-d H:i:s', strtotime($request->starts_date)),
                'ends_at' =>  date('Y-m-d H:i:s', strtotime($request->ends_date)),
            ]);
            $sale->meals()->attach($request->input('meal_id'));


            return redirect()->route('admin.sales')->with('success', 'Sales has been applied');
        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('admin.sales')->with(['error' => 'حدث خطأ برجاء المحاولة لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sale::find($id);
        $selected_meals = $sale->meals;
        $meals = Meal::get();
        return view('admin.sale.edit-sale', compact('sale', 'meals', 'selected_meals'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaleRequest $request, Sale $sale)
    {
        try {
            $sale = Sale::find($request->input('sale_id'));
            $sale->update([
                'name' => $request->name,
                'percentage' => $request->percentage,
                'is_flash_sale' => $request->is_flash_sale ?? 0,
                'starts_at' => date('Y-m-d H:i:s', strtotime($request->starts_date)),
                'ends_at' => date('Y-m-d H:i:s', strtotime($request->ends_date)),
            ]);

            $sale->meals()->sync($request->input('meal_id'));

            return redirect()->route('admin.sales')->with('success', 'Sale has been updated');
        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('admin.sales')->with(['error' => 'An error occurred. Please try again later.']);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $sale = Sale::find($id);

        if (!$sale) {
            return redirect()->route('admin.sales')->with('error', 'Sales doesn\'nt exist');
        }

        $sale->delete();

        return redirect()->route('admin.sales')->with('success', 'Sales has been applied');
    }
}
