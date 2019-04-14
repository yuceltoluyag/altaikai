<?php

$router = new AltoRouter;

$router->map('GET','/hakkimda','','Hakkımızda');

$match = $router->match();


if ($match) {
    echo 'Hakkımda sayfası';
}else {

    header($_SERVER['SERVER_PROTOCOL'].'Sayfa Bulunamadı');
    echo 'Sayfa Bulunamadı';
}
