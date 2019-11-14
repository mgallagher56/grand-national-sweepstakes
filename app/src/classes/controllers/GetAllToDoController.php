<?php

namespace MarcsNameSpace\controllers;


class GetAllToDoController
{
    private $ToDoModel;

    public function __construct($ToDoModel)
    {
        $this->ToDoModel = $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $results = $this->ToDoModel->getAllToDos();
        return $response->withJson($results,200);
    }
}