<?php

namespace App\Http\Controllers\Reservation;

use App\Contracts\Reservations\ReservationHandlerInterface;
use App\Models\Reservation;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;

class StepOneReservationHandler
{
    public function handle($request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'mobile' => ['required'],
            'guest_number' => ['required'],
            'provider_id' => ['required'],
            'branch_id' => ['required'],
        ]);

        //Store The Step One Of The Reservation
        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            //Put The Step One Of The Reservation in The Session
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }
        return redirect()->route('reservations.step.two');
    }

}
