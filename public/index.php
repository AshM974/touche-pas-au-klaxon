
<?php

$prefixUrl = '/';
$url = $_SERVER['REQUEST_URI'];


/*
echo($url);

*/


//Rouuter //

if ($url == $prefixUrl.'') {
    require_once './controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
} else if ($url == $prefixUrl.'users') {
    require('./views/users.php');
} else if ($url == $prefixUrl.'dashboard_admin') {
    require('./views/dashboard_admin.php');
} else if ($url == $prefixUrl.'login') {
    require('./views/login.php');
} else {
    require('./views/404.php');
}


