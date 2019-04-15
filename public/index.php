<?php

require_once __DIR__ . '/../bootstrap/init.php';

$app_name = getenv('APP_NAME');

//echo $app_name;

use Illuminate\Database\Capsule\Manager as Capsule;

$bul = Capsule::table('musteriler')->get();

var_dump($bul);