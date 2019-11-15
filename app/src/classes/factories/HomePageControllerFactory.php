<?php

namespace MarcsNameSpace\factories;


use MarcsNameSpace\controllers\HomePageController;
use Psr\Container\ContainerInterface;

class HomePageControllerFactory
{
    public function __invoke(ContainerInterface $container) : HomePageController
    {
        $renderer = $container->get('renderer');
        return new HomePageController($renderer);
    }
}