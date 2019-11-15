<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\controllers\AddToDoController;
use Psr\Container\ContainerInterface;

class AddToDoControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $ToDoModel= $container->get('ToDoModel');
        return new AddToDoController($ToDoModel);
    }
}