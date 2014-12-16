<?php

define('BASE_DIR', __DIR__);

require BASE_DIR . '/vendor/autoload.php';

foreach(glob(BASE_DIR . '/config/*.php') as $c){
  require $c;
}
