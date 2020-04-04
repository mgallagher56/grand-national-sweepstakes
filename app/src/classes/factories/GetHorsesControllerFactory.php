<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\controllers\GetHorsesController;
use Psr\Container\ContainerInterface;

class GetHorsesControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $HorsesModel = $container->get('HorsesModel');
        return new GetHorsesController($HorsesModel);
    }
}
