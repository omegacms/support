<?php

namespace Omega\Support\Facades;

class Cache extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'cache';
    }
}