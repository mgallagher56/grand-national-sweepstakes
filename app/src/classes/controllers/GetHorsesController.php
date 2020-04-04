<?php

namespace MarcsNameSpace\controllers;


class GetHorsesController
{
    private $HorsesModel;

    public function __construct($ToDoModel)
    {
        $this->HorsesModel = $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $results = $this->HorsesModel->getHorses();
        return $response->withJson($results, 200);
    }
}