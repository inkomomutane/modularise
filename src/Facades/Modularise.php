<?php

namespace InkomoMutane\Modularise\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \InkomoMutane\Modularise\Modularise
 */
class Modularise extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \InkomoMutane\Modularise\Modularise::class;
    }
}
