<?php

namespace MarcsNameSpace\controllers;

class  DeleteToDoController
{
    private $ToDoModel;

    public function __construct($ToDoModel)
    {
        $this->ToDoModel = $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $id = $request->getParam('id');
        $results = $this->ToDoModel->getAllToDos();
        $this->ToDoModel->deleteToDo($id);
        return $response->withJson($results, 200);
    }
}