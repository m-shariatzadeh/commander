<?php

namespace MShariatzadeh\Commander\Facades;

use Illuminate\Support\Facades\Facade;

class Commander extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'commander';
    }
}
