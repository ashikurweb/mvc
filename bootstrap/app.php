<?php 
use Core\App;
use Core\Router;
use Database\Database;
use Core\Container;

$container = new Container();

$container->bind('db', function () {
    $config = require base_path('config/database.php');
    return new Database($config['database']);
});

$router = new Router();

App::setContainer($container);