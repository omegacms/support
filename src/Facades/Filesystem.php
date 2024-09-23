<?php

namespace Omega\Support\Facades;

class Filesystem extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'filesystem';
    }
}