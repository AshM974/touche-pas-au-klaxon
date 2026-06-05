
<?php
session_start();
$prefixUrl = '/';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


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
} else if ($url == $prefixUrl. 'create_trajet') {
    require_once './controllers/TrajetController.php';
    $controller = new TrajetController();
    $controller->create();
} else if ($url == $prefixUrl. 'ajout_trajet'){
    require_once './controllers/TrajetController.php';
    $controller = new TrajetController();
    $controller->ajout();
} else if ($url == $prefixUrl. 'edit_trajet'){
    require_once './controllers/TrajetController.php';
    $controller = new TrajetController();
    $controller->edit();
} else if ($url == $prefixUrl . 'update_trajet') {
    require_once './controllers/TrajetController.php';
    $controller = new TrajetController();
    $controller->update();
} else {
    require('./views/404.php');
}


