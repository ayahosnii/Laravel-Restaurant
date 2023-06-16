<?php

namespace App\Contracts\Reservations;

use Illuminate\Http\Request;

abstract class ReservationHandler implements ReservationHandlerInterface
{
    public abstract function handle(Request $request);
}
