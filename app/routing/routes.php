<?php

$router = new AltoRouter;

$router->map('GET','/','','Anasayfa');

$match = $router->match();


if ($match) {
    require_once __DIR__ . '/../controllers/BaseController.php';
    require_once __DIR__ . '/../controllers/IndexController.php';
    $index = new \App\Controllers\IndexController();
    $index->show();
}else {

    header($_SERVER['SERVER_PROTOCOL'].'Sayfa Bulunamadı');
    echo 'Sayfa Bulunamadı';
}
