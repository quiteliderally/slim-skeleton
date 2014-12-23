<?php

require __DIR__ . '/../bootstrap.php';

foreach(glob(BASE_DIR . '/config/*.php') as $c){
  require $c;
}
