<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomePageController');
    $app->get('/api/', 'GetAllToDoController');
    $app->post('/api/add', 'AddToDoController');
    $app->post('/api/delete', 'DeleteToDoController');
    $app->post('/api/update', 'UpdateToDoController');
    $app->post('/api/complete', 'CompleteToDoController');


};
