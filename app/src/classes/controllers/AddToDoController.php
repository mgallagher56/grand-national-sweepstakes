<?php

namespace MarcsNameSpace\controllers;


class  AddToDoController
{
    private $ToDoModel;

    public function __construct($ToDoModel)
    {
        $this->ToDoModel = $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $task = $request->getParam('task');
        $this->ToDoModel->addToDo($task);
        $results = $this->ToDoModel->getAllToDos();
        return $response->withJson($results, 200);
    }
}