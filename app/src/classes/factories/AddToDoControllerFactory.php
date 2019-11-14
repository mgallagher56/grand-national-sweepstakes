<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\models\ToDoModel;
use Psr\Container\ContainerInterface;

class AddToDoControllerFactory
{
    private $ToDoModel;

    public function __construct(ContainerInterface $container)
    {
        $this->ToDoModel = $container->get('ToDoModel');
    }
}