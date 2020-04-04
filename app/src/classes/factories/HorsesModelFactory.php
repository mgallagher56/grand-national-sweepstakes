<?php

namespace MarcsNameSpace\factories;

use MarcsNameSpace\models\HorsesModel;
use Psr\Container\ContainerInterface;

class HorsesModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('DbConnection');
        $db = $db->getDB();
        return new HorsesModel($db);
    }
}

