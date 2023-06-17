<?php

namespace App\Contracts\Reservations;

use Illuminate\Http\Request;

interface TableAvailabilityInterface
{
    public function getAvailableTables($reservation);
}
