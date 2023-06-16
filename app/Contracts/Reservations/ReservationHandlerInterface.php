<?php

namespace App\Contracts\Reservations;

use Illuminate\Http\Request;

interface ReservationHandlerInterface
{
    public function handle(Request $request);
}
