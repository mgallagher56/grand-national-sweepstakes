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
        $this->ToDoModel->deleteToDo($id);
        return $response->withRedirect('/');
    }
}