<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminLiveTracking extends Component
{
    public function render()
    {
        return view('livewire.admin-live-orders')->layout('layouts.base');
    }
}
