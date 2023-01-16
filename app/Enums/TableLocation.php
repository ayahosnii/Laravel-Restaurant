<?php

namespace App\Enums;

abstract class TableLocation extends Enum
{
    const front = 'Front';
    const inside = 'Inside';
    const outside = 'Outside';
}

abstract class Enum {
    private static $constCacheArray = NULL;

    private static function getConstants() {
        if (self::$constCacheArray == NULL) {
            self::$constCacheArray = [];
        }
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            $reflect = new \ReflectionClass($calledClass);
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }
        return self::$constCacheArray[$calledClass];
    }

    public static function locations() {
        return self::getConstants();
    }
}
