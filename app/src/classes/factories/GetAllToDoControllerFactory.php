<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\controllers\GetAllToDoController;
use Psr\Container\ContainerInterface;

class GetAllToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $ToDoModel = $container->get('ToDoModel');
        return new GetAllToDoController($ToDoModel);
    }
}
