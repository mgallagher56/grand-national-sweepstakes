<?php

namespace MarcsNameSpace\factories;

use Psr\Container\ContainerInterface;
use MarcsNameSpace\controllers\UpdateToDoController;

class  UpdateToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $ToDoModel= $container->get('ToDoModel');
        return new UpdateToDoController($ToDoModel);
    }


}