<?php

namespace CeresTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class DataProvider
{
    public function call(Twig $twig):string
    {
        return $twig->render("CeresTheme::content.DataProvider");
    }
}