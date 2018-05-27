<?php

use Lib\Controller\RoutesController;

$router = new RoutesController();

$router->addRoute('/', 'home');
$router->addRoute('/about');