<?php

$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'Anasayfa');

//Yönetici Kısmı
$router->map('GET', '/admin', 'App\Controllers\Admin\DashboardController@show', 'yonetici_sayfasi');
