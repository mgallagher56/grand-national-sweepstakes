<?php

namespace MarcsNameSpace\factories;
use MarcsNameSpace\controllers\RestoreToDoController;
use Psr\Container\ContainerInterface;


class RestoreToDoControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $ToDoModel= $container->get('ToDoModel');
        return new RestoreToDoController($ToDoModel);
    }
}