<?php

use MarcsNameSpace\DB\DbConnection;
use MarcsNameSpace\factories\AddNameToHorseControllerFactory;
use MarcsNameSpace\factories\GetHorsesControllerFactory;
use MarcsNameSpace\factories\HomePageControllerFactory;
use MarcsNameSpace\factories\HorsesModelFactory;
use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    $container['DbConnection'] = new DbConnection();
    $container['HomePageController'] = new HomePageControllerFactory();
    $container['HorsesModel'] = new HorsesModelFactory();
    $container['GetHorsesController'] = new GetHorsesControllerFactory();
    $container['AddNameToHorseController'] = new AddNameToHorseControllerFactory();
};