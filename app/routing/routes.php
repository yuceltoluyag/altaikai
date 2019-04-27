<?php

$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'Anasayfa');

//Yönetici Kısmı
$router->map('GET', '/admin', 'App\Controllers\Admin\DashboardController@show', 'admin_dashboard');
$router->map('POST', '/admin', 'App\Controllers\Admin\DashboardController@get', 'admin_form');


//Yönetici Kısmı
$router->map('GET', '/admin/customers/customers', 'App\Controllers\Admin\CustomersController@show', 'customer_list');
$router->map('POST', '/admin/customers/customers', 'App\Controllers\Admin\CustomersController@store', 'create_customer');
