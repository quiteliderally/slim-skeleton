<?php

define('BASE_DIR', __DIR__);
define('PUBLIC_DIR', BASE_DIR . '/public');

require BASE_DIR . '/vendor/autoload.php';

ini_set('include_path', 
  BASE_DIR . '/lib' . 
  PATH_SEPARATOR . 
  get_include_path()
);
