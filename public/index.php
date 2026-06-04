
<?php
session_start();
$prefixUrl = '/';
$url = $_SERVER['REQUEST_URI'];



//Router //

if ($url == $prefixUrl.'') {
    require_once './controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
} else if ($url == $prefixUrl.'users') {
    require_once './controllers/UsersController.php';
    $controller = new UsersController();
    $controller->index();
} else if ($url == $prefixUrl.'dashboard_admin') {
    require('./views/dashboard_admin.php');
} else if ($url == $prefixUrl.'login') {
    require_once './controllers/LoginController.php';
    $controller = new LoginController();
    $controller->index();
} else if ($url == $prefixUrl. 'logout') {
    require_once './controllers/LoginController.php';
    $controller = new LoginController();
    $controller->logout();
} else {
    require('./views/404.php');
}


