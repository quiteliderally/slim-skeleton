<?php

if(isset($_SERVER['HTTP_X_SUBDIRECTORY'])){
  $_SERVER['SCRIPT_NAME'] = $_SERVER['HTTP_X_SUBDIRECTORY'] . $_SERVER['SCRIPT_NAME'];
  $_SERVER['REQUEST_URI'] = $_SERVER['HTTP_X_SUBDIRECTORY'] . $_SERVER['REQUEST_URI'];
}
if(isset($_SERVER['HTTP_X_SERVER_PORT'])){
  $_SERVER['SERVER_PORT'] = $_SERVER['HTTP_X_SERVER_PORT'];
}

require __DIR__ . '/../bootstrap.php';

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => BASE_DIR . '/templates'
));

$view = $app->view();

$view->parserExtensions = array(
  new \Slim\Views\TwigExtension(),
);

foreach(glob(BASE_DIR . '/config/*.php') as $c){
  require $c;
}

foreach(glob(BASE_DIR . '/modules/*.php') as $c){
  require $c;
}

require BASE_DIR . '/app/main.php';

$app->run();
