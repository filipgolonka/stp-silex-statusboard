<?php

namespace StpBoard\Base;

trait TwigTrait
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    protected function initTwig($directory)
    {
        $loader = new \Twig_Loader_Filesystem($directory);

        $this->twig = new \Twig_Environment($loader);
    }
}
