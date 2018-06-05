<?php
/**
 * Created by PhpStorm.
 * User: J.Perzewski
 * Date: 05.06.2018
 * Time: 12:16
 */

namespace Voptest\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;


class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        //test..//
        return $twig->render('test::content.hello');
    }

}