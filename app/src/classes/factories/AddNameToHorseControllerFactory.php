<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\controllers\AddNameToHorseController;
use Psr\Container\ContainerInterface;

class  AddNameToHorseControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $HorsesModel = $container->get('HorsesModel');
        return new AddNameToHorseController($HorsesModel);
    }


}