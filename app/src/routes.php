<?php

use MarcsNameSpace\controllers\AddToDoController;
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'GetAllToDoController');
    $app->get('/add', 'AddToDoController');
    $app->get('/update', 'UpdateToDoController');


};
