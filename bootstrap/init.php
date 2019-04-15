<?php
// Oturum Başlamadıysa Başlatıyoruz
if (!isset($_SESSION)) session_start();
// Environment Ayarları
require_once __DIR__ . '/../app/config/_env.php';
//VeriTabanı Sınıfı Yükleme
new \App\Classes\Database();
// Özel Hata Sayfaları : Whoops
set_error_handler([new  \App\Classes\ErrorHandler(),'handleErrors']);
// Routing & Url Sınıfı
require_once __DIR__ . '/../app/routing/routes.php';
new \App\RouteDispatcher($router);