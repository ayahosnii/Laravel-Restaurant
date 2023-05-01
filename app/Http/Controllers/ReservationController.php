<?php

namespace App\Http\Controllers;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\ProviderRegister;
use App\Models\Reservation;
use App\Models\Table;
use App\Notifications\ReservationNotification;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $user = Auth::user();

        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        $providers = ProviderRegister::where('accountactivated', '1')->get();
        return view('site.step-one', compact('reservation', 'min_date', 'max_date', 'providers', 'user'));
    }

    public function storeStepOne(Request $request)
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

        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return redirect()->route('reservations.step.two');
    }
    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');

        $res_table_ids = Reservation::orderBy('res_date')->get()->filter(function ($value) use ($reservation) {
            return $value->res_date = Carbon::parse($value->res_date);
        })->pluck('table_id');

        $tables = \App\Models\providers\Table::where('status', 'available')
            ->where('guest_number', '>=', $reservation->guest_number)
            ->where('provider_id', $reservation->provider_id)
            ->where('branch_id', $reservation->branch_id)
            ->whereNotIn('id', $res_table_ids)->get();
        return view('site.step-two', compact('reservation', 'tables'));
    }

    public function storeStepTwo(Request $request)
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
        return redirect()->route('restaurant.index');
    }
}
