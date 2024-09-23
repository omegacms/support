<?php

namespace Omega\Support\Facades;

class AliasLoader
{
    protected array $aliases = [];

    public function __construct(array $aliases)
    {
        $this->aliases = $aliases;
    }

    public function load(): void
    {
        foreach ($this->aliases as $alias => $class) {
            class_alias($class, $alias);
        }
    }

    public static function getInstance(array $aliases): AliasLoader
    {
        return new static($aliases);
    }
}
