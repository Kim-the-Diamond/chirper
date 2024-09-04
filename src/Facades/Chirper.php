<?php

namespace KimSpeer\Chirper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KimSpeer\Chirper\Chirper
 */
class Chirper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \KimSpeer\Chirper\Chirper::class;
    }
}
