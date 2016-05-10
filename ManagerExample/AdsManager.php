<?php

namespace App\Ads;

use Illuminate\Support\Manager;

class AdsManager extends Manager implements Contracts\Factory
{
    /**
     * Create an instance of the specified driver.
     *
     * @return \App\Ads\Providers\SupersonicProvider
     */
    protected function createSupersonicDriver()
    {
        $config = $this->app['config']['services.supersonic'];
        return $this->buildProvider(\App\Ads\Providers\SupersonicProvider::class, $config);
    }

    /**
     * Get a driver instance.
     *
     * @param  string  $driver
     * @return mixed
     */
    public function with($driver)
    {
        return $this->driver($driver);
    }

    /**
     * Build a provider instance.
     *
     * @param  string  $provider
     * @param  array  $config
     * @return \Laravel\Socialite\Two\AbstractProvider
     */
    public function buildProvider($provider, $config)
    {
        return new $provider(
            $this->app['request'],
            $config['auth_token']
        );
    }
    /**
     * Get the default driver name.
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        throw new InvalidArgumentException('No Ads driver was specified.');
    }

}
