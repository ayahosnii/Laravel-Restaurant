<?php

namespace App\Services;



class TimeService
{
    public static function updateTimeValues($diff)
    {
        $days = floor($diff / 86400);
        $hours = floor(($diff % 86400) / 3600);
        $minutes = floor(($diff % 3600) / 60);
        $seconds = $diff % 60;

        return compact('days', 'hours', 'minutes', 'seconds');
    }
}

