<?php

namespace MarcsNameSpace\controllers;

use Slim\Views\PhpRenderer;

class HomePageController
{
    private $renderer;

    public function __construct(PhpRenderer $renderer)
    {
        $this->renderer= $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        return $this->renderer->render($response, 'index.phtml', $args);
    }
}