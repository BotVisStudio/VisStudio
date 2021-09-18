<?php

namespace VisStudio\Drivers;

class DriverManager
{
    /**
     * All available and installed drivers
     *
     * @var array
     */
    protected static $drivers = [];

    /**
     * Get available drivers
     *
     * @return array
     */
    public static function getAvailableDrivers(): array
    {
        return self::$drivers;
    }
}