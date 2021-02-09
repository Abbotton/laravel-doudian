<?php

namespace Abbotton\DouDian;

use Illuminate\Support\Facades\Facade;

class DouDianFacade extends Facade
{
    public static function __callStatic($name, $args)
    {
        return app('DouDian')->$name;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'doudian';
    }
}
