<?php

namespace CeresTheme\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class CeresThemeServiceProvider
 * @package CeresTheme\Providers
 */
class CeresThemeServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(CeresThemeRouteServiceProvider::class);
    }
}