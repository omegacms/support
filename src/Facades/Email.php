<?php

namespace Omega\Support\Facades;

class Email extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'email';
    }
}
