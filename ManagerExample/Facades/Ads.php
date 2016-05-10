<?php

namespace App\Ads\Facades;

use Illuminate\Support\Facades\Facade;

class Ads extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\Ads\Contracts\Factory::class;
    }
}
