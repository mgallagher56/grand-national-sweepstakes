<?php

namespace MarcsNameSpace\controllers;

Use MarcsNameSpace\models\ToDoModel;

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
        $this->ToDoModal->addToDo($task);
        return $response->withRedirect('/', 200);
    }
}