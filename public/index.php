<?php
require_once __DIR__.'/../vendor/autoload.php';

defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));
defined('APPLICATION_PATH') || define('APPLICATION_PATH', (getenv('APPLICATION_PATH') ? getenv('APPLICATION_PATH') : __DIR__));

$app = new Reprint\Application();
if(APPLICATION_ENV == 'development') {
  $app['debug'] = true;
}
$app->run();
