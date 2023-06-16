<?php

namespace App\Http\Controllers;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Reservation\StepOneReservationHandler;
use App\Http\Controllers\Reservation\StepTwoReservationHandler;
use App\Http\Controllers\Reservation\StepThreeReservationHandler;
use App\Models\ProviderRegister;
use App\Models\providers\Table;
use App\Models\Reservation;
use App\Notifications\ReservationNotification;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function __construct(
        StepOneReservationHandler $stepOneHandler,
        StepTwoReservationHandler $stepTwoHandler,
        StepThreeReservationHandler $stepThreeHandler
    ) {
        $this->stepOneHandler = $stepOneHandler;
        $this->stepTwoHandler = $stepTwoHandler;
        $this->stepThreeHandler = $stepThreeHandler;
    }

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
        $this->stepOneHandler->handle($request);
        return redirect()->route('reservations.step.two');
    }

    public function stepTwo(Request $request)
    {
        $this->stepTwoHandler->handle($request);
    }

    public function storeStepTwo(Request $request)
    {
        $this->stepThreeHandler->handle($request);
        return redirect()->route('restaurant.index');
    }
}
