<?php
require '../vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('../resources/views', '../cache');
$app = new \App\App();
$config = $app->getConfig();
$helper = new \App\StringHelpers();

echo $blade->render('index', ['app' => $app, 'config' => $config, 'helper' => $helper]);