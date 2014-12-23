<?php

define('BASE_DIR', __DIR__);

require BASE_DIR . '/vendor/autoload.php';

ini_set('include_path', 
  BASE_DIR . '/lib' . 
  PATH_SEPARATOR . 
  get_include_path()
);
