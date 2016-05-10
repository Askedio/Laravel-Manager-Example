<?php

namespace App\Ads\Contracts;

interface Factory
{
    /**
     * Get provider implementation.
     *
     * @param string $driver
     *
     * @return \App\Ads\Contracts\Provider
     */
    public function driver($driver = null);
}
