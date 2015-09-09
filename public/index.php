<?php

use Prototypemvc\Core\Config;
use Prototypemvc\Core\Bootstrap;
ini_set('display_errors', false);
require '../vendor/autoload.php';

ob_start();
define('DOC_ROOT', realpath(dirname(__FILE__) . '/../'));
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST']);

$environment = Config::get('environment', 'live');
$timezone = config::get('environment', $environment, 'timezone');
date_default_timezone_set($timezone);
$app = new Bootstrap();
$app->setController('welcome');
$app->init();
ob_flush();
