<?php

if (!isset($_SESSION)) session_start();
require_once __DIR__ . '/../app/config/_env.php';
new \App\Classes\Database();
require_once __DIR__ . '/../app/routing/routes.php';
new \App\RouteDispatcher($router);