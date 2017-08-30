<?php

use Symfony\Component\Debug\Debug;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require_once __DIR__.'/../app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();

$requestHandler = new \Aerys\AerysBundle\RequestHandler($kernel);

$host = 'localhost';
$port = 1234;
($hosts[] = new \Aerys\Host)
    ->name($host)
    ->expose('*', $port)
    ->use($requestHandler);

return $hosts;

