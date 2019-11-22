<?php

namespace MarcsNameSpace\controllers;

class  RestoreToDoController
{
    private $ToDoModel;

    public function __construct($ToDoModel)
    {
        $this->ToDoModel = $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $id = $request->getParam('id');
        $id = intval($id);
        $results = $this->ToDoModel->getAllCompletedToDos();
        $this->ToDoModel->restoreToDo($id);
        return $response->withJson($results, 200);
    }
}