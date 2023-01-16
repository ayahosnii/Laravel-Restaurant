<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableRequest;
use App\Models\providers\Branch;
use App\Models\providers\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::get();
        return view('providers.table.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::guard('providers')->user()->id;
        $tables = Table::where('provider_id', $id)->get();
        $branches = Branch::where('provider_id', $id)->get();
        return view('providers.table.create-tables', compact('tables', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableRequest $request)
    {
        try {
            Table::create([
                'name' => $request->name,
                'guest_number' => $request->guest_number,
                'status' => $request->status,
                'location' => $request->location,
                'provider_id' => Auth::guard('providers')->user()->id,
                'branch_id' => $request->branch
            ]);
            return redirect()->route('tables')->with('تمت اضافة منضدة بنجاح');
        }catch (\Exception $e){
            return redirect()->route('tables')->with('حدث خطأ حاول مرة اخرى');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\providers\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\providers\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\providers\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\providers\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
