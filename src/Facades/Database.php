<?php

namespace Omega\Support\Facades;

class Database extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'database';
    }
}