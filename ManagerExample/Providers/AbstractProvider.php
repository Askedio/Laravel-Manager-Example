<?php

namespace App\Ads\Providers;

use App\Ads\Contracts\Provider as ProviderContract;
use Illuminate\Http\Request;

abstract class AbstractProvider implements ProviderContract
{
    /**
     * The HTTP request instance.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * Auth token.
     *
     * @var string
     */
    protected $authToken;

    /**
     * Create a new provider instance.
     *
     * @param \Illuminate\Http\Request $request
     * @param string                   $authToken
     *
     * @return void
     */
    public function __construct(Request $request, $authToken)
    {
        $this->request = $request;
        $this->authToken = $authToken;
    }
}
