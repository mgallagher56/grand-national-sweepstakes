<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\models\ToDoModel;
use Psr\Container\ContainerInterface;

class ToDoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('DbConnection');
        $db = $db->getDB();
        return new ToDoModel($db);
    }
}

