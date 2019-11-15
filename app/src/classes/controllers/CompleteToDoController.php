<?php

namespace MarcsNameSpace\controllers;

class CompleteToDoController
{
    private $ToDoModel;

    public function __construct($ToDoModel)
    {
        $this->ToDoModel = $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $id = $request->getparam('id');
        $id = intval($id);
        $this->ToDoModel->completeToDo($id);
        return $response->withRedirect('/', 200);
    }
}