<?php

namespace Alltrons\FilamentFullCalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alltrons\FilamentFullCalendar\FilamentFullCalendar
 */
class FilamentFullCalendar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-fullcalendar';
    }
}
