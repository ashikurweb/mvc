<?php

session_start();

const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'app/Helpers/functions.php';
require BASE_PATH.'vendor/autoload.php';

require BASE_PATH.'routes/web.php';

Core\Router::route($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);