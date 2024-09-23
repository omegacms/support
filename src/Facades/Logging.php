<?php

namespace Omega\Support\Facades;

class Logging extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'logging';
    }
}
