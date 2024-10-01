<?php

namespace Omega\Support\Facades;

class Router extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'router';
    }
}