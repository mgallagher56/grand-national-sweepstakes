<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\controllers\GetAllToDoController;
use Psr\Container\ContainerInterface;

class GetAllToDoControllerFactory
{
    private $ToDoModel;

    public function __construct(ContainerInterface $container)
    {
        $this->ToDoModel = $container->get('ToDoModel');
    }

    public function __invoke()
    {
        return new GetAllToDoController($this->ToDoModel);
    }
}