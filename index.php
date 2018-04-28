<?php

$loader = require_once __DIR__ . '/vendor/autoload.php';
$loop = React\EventLoop\Factory::create();

$server = new BearSys\WSF\WebSocketServer($loop, $loader);
$server->addConfig(__DIR__ . '/cfg/example.neon');
$server->run();
