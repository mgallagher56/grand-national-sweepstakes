<?php

namespace MarcsNameSpace\controllers;

class AddNameToHorseController
{
    private $HorsesModel;

    public function __construct($ToDoModel)
{
    $this->HorsesModel = $ToDoModel;
}

    public function __invoke($request, $response, $args)
    {
        $name = $request->getParam('name');
        $_SESSION['selected'] = 'selectedHorse';
        $_SESSION['name'] = $name;
        $results = $this->HorsesModel->addName($name);
        return $response->withJson($results,200);
    }
}