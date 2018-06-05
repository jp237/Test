<?php
/**
 * Created by PhpStorm.
 * User: J.Perzewski
 * Date: 05.06.2018
 * Time: 12:14
 */

namespace Voptest\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class testRouteServiceProvder extends RouteServiceProvider
{

    public function map(Router $router)
    {
        $router->get('hello','HelloWorld\Controllers\ContentController@sayHello');
    }

}