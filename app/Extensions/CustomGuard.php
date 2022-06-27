<?php
namespace App\Extensions;
use Illuminate\Auth\SessionGuard;

class CustomGuard extends SessionGuard
{
    public function provider()
    {
        if ($this->user()->isProvider()) {
            return true;
        }
        return false;
    }
}
