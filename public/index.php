<?php

require_once __DIR__ . '/../vendor/autoload.php';
use app\Hello;

$hello = new Hello();
 echo $hello->talk();