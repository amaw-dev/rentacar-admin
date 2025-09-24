<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Wati extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'wati';
    }
}
