<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\providers\Branch;
use Illuminate\Http\Request;

class FetchBranchController extends Controller
{
    public function fetchBranch(Request $request)
    {
        $data['branches'] = Branch::where("provider_id", $request->branch_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }
}
