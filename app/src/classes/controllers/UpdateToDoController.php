<?php

namespace MarcsNameSpace\controllers;

class UpdateToDoController
{
    private $ToDoModel;

    public function __construct($ToDoModel)
{
    $this->ToDoModel = $ToDoModel;
}

    public function __invoke($request, $response, $args)
    {
        $task = $request->getParam('task');
        $id = $request->getparam('id');
        $id = intval($id);
        $results = $this->ToDoModel->getAllToDos();
        $this->ToDoModel->updateToDo($task, $id);
        return $response->withJson($results, 200);
    }
}