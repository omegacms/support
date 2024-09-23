<?php

namespace Omega\Support\Facades;

class Response extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'response';
    }
}
