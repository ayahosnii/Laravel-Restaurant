<?php

namespace App\Http\Controllers\Reservation;

use App\Contracts\Reservations\ReservationHandlerInterface;

class StepTwoReservationHandler implements ReservationHandlerInterface
{
    public function __construct(tableAvailability $tableAvailability)
    {
        $this->tableAvailability = $tableAvailability;
    }

    public function handle($request)
    {
        $reservation = $request->session()->get('reservation');

        $tables = $this->tableAvailability->getAvailableTables($reservation);

        $view = view('site.step-two', compact('reservation', 'tables'));
        return $view;
    }
}
