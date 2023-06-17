<?php

namespace App\Http\Controllers\Reservation;

use App\Models\providers\Table;
use App\Models\Reservation;
use Carbon\Carbon;

class tableAvailability
{
    public function getAvailableTable($reservation)
    {
        //Check The Table Availability

        //1- Get The Table's Id Of That Date
        $res_table_ids = Reservation::orderBy('res_date')->get()->filter(function ($value) use ($reservation) {
            return $value->res_date = Carbon::parse($value->res_date);
        })->pluck('table_id');


        $tables = Table::where('status', 'available')
            ->where('guest_number', '>=', $reservation->guest_number)
            ->where('provider_id', $reservation->provider_id)
            ->where('branch_id', $reservation->branch_id)
            ->whereNotIn('id', $res_table_ids)->get();

        return $tables;
    }
}
