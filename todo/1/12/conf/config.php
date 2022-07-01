<?php

session_start();

define('DSN', 'mysql:host=localhost;dbname=myapp;charset=utf8mb4');
define('DB_USER', 'myappuser');
define('DB_PASS', 'myapppass');
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/todo/');

require_once(__DIR__ . '/../functions.php');