<?php
/**
 * Created by PhpStorm.
 * User: J.Perzewski
 * Date: 05.06.2018
 * Time: 12:13
 */

namespace Voptest\Providers;

use Plenty\Plugin\ServiceProvider;

class testServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(testRouteServiceProvider::class);
    }
}