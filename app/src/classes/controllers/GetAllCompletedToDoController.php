<?php

namespace MarcsNameSpace\controllers;


class GetAllCompletedToDoController
{
    private $ToDoModel;

    public function __construct($ToDoModel)
    {
        $this->ToDoModel = $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $results = $this->ToDoModel->getAllCompletedToDos();
        return $response->withJson($results, 200);
    }
}