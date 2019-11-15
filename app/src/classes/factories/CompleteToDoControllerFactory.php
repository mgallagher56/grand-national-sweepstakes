<?php

namespace MarcsNameSpace\factories;
use MarcsNameSpace\controllers\CompleteToDoController;
use Psr\Container\ContainerInterface;

class  CompleteToDoControllerFactory
{

    public function __invoke(ContainerInterface $container)
{
    $ToDoModel= $container->get('ToDoModel');
    return new CompleteToDoController($ToDoModel);
}
}