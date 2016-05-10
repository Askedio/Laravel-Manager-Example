<?php

namespace App\Ads\Contracts;

interface Provider
{
    /**
     * Process a callback.
     *
     * @return
     */
    public function callback();
}
