<?php

namespace Unibrick\TwCompo\Facades;

use Illuminate\Support\Facades\Facade;

class TwCompo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'twcompo';
    }
}
