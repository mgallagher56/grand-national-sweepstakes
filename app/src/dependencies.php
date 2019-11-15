<?php

use MarcsNameSpace\factories\ToDoModelFactory;
use MarcsNameSpace\factories\HomePageControllerFactory;
use MarcsNameSpace\factories\UpdateToDoControllerFactory;
use MarcsNameSpace\factories\DeleteToDoControllerFactory;
use MarcsNameSpace\DB\DbConnection;
use MarcsNameSpace\factories\GetAllToDoControllerFactory;
use MarcsNameSpace\factories\AddToDoControllerFactory;
use MarcsNameSpace\factories\CompleteToDoControllerFactory;
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
    $container['ToDoModel'] = new ToDoModelFactory();
    $container['GetAllToDoController'] = new GetAllToDoControllerFactory();
    $container['AddToDoController'] = new AddToDoControllerFactory();
    $container['DeleteToDoController'] = new DeleteToDoControllerFactory();
    $container['UpdateToDoController'] = new UpdateToDoControllerFactory();
    $container['CompleteToDoController'] = new CompleteToDoControllerFactory();

};