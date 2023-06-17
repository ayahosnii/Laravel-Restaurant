<?php

namespace App\Http\Controllers\Reservation;

use App\Contracts\Reservations\TableAvailabilityInterface;
use App\Models\providers\Table;
use App\Models\Reservation;
use Carbon\Carbon;

class tableAvailability implements TableAvailabilityInterface
{
    public function getAvailableTables($reservation)
    {
        $res_table_ids = Reservation::whereDate('res_date', $reservation->res_date)
            ->orderBy('res_date')
            ->pluck('table_id');

        $tables = Table::where('status', 'available')
            ->where('guest_number', '>=', $reservation->guest_number)
            ->where('provider_id', $reservation->provider_id)
            ->where('branch_id', $reservation->branch_id)
            ->whereNotIn('id', $res_table_ids)
            ->get();

        return $tables;
    }
}
