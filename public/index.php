<?php

use Symfony\Component\Debug\Debug;

require_once __DIR__.'/../vendor/autoload.php';

defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));
defined('APPLICATION_PATH') || define('APPLICATION_PATH', (getenv('APPLICATION_PATH') ? getenv('APPLICATION_PATH') : __DIR__));

if(APPLICATION_ENV !== 'development') {
  Debug::enable();
}

$app = new Reprint\Application();
$app->run();
