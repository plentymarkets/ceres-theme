<?php

namespace CeresTheme\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class CeresThemeController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getTestPage(Twig $twig):string
    {
        return $twig->render('CeresTheme::content.TestPage');
    }
}