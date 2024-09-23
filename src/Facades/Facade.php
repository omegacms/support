<?php

namespace Omega\Support\Facades;

use Omega\Application\Application;
use RuntimeException;

abstract class Facade
{
    protected static function resolveFacadeInstance(): mixed
    {
        return Application::getInstance()->resolve(static::getFacadeAccessor());
    }

    public static function __callStatic($method, $arguments)
    {
        $instance = static::resolveFacadeInstance();

        if (!$instance) {
            throw new RuntimeException('A facade root has not been set.');
        }

        return $instance->$method(...$arguments);
    }

    protected static abstract function getFacadeAccessor(): string;
}
