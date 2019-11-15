<?php

namespace MarcsNameSpace\factories;
use MarcsNameSpace\controllers\DeleteToDoController;
use Psr\Container\ContainerInterface;


class DeleteToDoControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $ToDoModel= $container->get('ToDoModel');
        return new DeleteToDoController($ToDoModel);
    }
}