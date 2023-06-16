<?php

namespace App\Http\Controllers\Reservation;

use App\Contracts\Reservations\ReservationHandlerInterface;

class StepTwoReservationHandler
{
    public function __construct(tableAvailability $tableAvailability)
    {
        $this->tableAvailability = $tableAvailability;
    }

    public function handle($request)
    {
        $reservation = $request->session()->get('reservation');

        $tables = $this->tableAvailability->getAvailableTable($reservation);

        return view('site.step-two', compact('reservation', 'tables'));
    }

}
