<?php

namespace App\Http\Controllers\Reservation;

use App\Contracts\Reservations\ReservationHandlerInterface;

class StepThreeReservationHandler implements ReservationHandlerInterface
{
    public function handle($request)
    {
        $validated = $request->validate([
            'table_id' => ['required']
        ]);
        $reservation = $request->session()->get('reservation');
//        $reservation->merge(
//            $request-> Auth::guard('providers')->user()->id
//        );
//        $reservation->branch_id = $request-> Auth::guard('providers')->user()->id;
//                'branch_id' => $request->branch
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');

        //$reservation->notify(new ReservationNotification($invoice));

        $view = redirect()->route('restaurant.index');
        return $view;
    }

}
