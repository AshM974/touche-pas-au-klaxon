<?php

$prefixUrl = '/';
$url = $_SERVER['REQUEST_URI'];


if ($url == $prefixUrl.'') {
    require('./views/home.php');
} else if ($url == $prefixUrl.'users') {
    require('./views/users.php');
} else if ($url == $prefixUrl.'dashboard_admin') {
    require('./views/dashboard_admin.php');
} else if ($url == $prefixUrl.'login') {
    require('./views/login.php');
} else {
    require('./views/404.php');
}