<?php

namespace App\Enums;

abstract class TableStatus extends Enums
{
    const pending = 'Pending';
    const available = 'Available';
    const unavailable = 'Unavailable';
}

abstract class Enums {
    private static $constArray = NULL;

    private static function getConsts() {
        if (self::$constArray == NULL) {
            self::$constArray = [];
        }
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$constArray)) {
            $reflect = new \ReflectionClass($calledClass);
            self::$constArray[$calledClass] = $reflect->getConstants();
        }
        return self::$constArray[$calledClass];
    }

    public static function status() {
        return self::getConsts();
    }
}
