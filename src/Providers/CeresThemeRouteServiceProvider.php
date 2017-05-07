<?php

namespace CeresTheme\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class CeresThemeRouteServiceProvider
 * @package CeresTheme\Providers
 */
class CeresThemeRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('ceres-theme','CeresTheme\Controllers\CeresThemeController@getTestPage');
    }
}