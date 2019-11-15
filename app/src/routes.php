<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'GetAllToDoController');
    $app->post('/add', 'AddToDoController');
    $app->post('/delete', 'DeleteToDoController');
    $app->post('/update', 'UpdateToDoController');
    $app->post('/complete', 'CompleteToDoController');


};
