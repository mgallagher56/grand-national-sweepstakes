<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\controllers\GetAllCompletedToDoController;
use Psr\Container\ContainerInterface;

class GetAllCompletedToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $ToDoModel = $container->get('ToDoModel');
        return new GetAllCompletedToDoController($ToDoModel);
    }
}