<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomePageController');
    $app->get('/api/', 'GetHorsesController');
    $app->post('/api/update', 'AddNameToHorseController');

};
