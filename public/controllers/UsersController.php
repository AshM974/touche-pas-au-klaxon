<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/UsersGet.php';

class UsersController {

    public function index() {
        if (!isset($_SESSION['id_users'])) {

        header('Location: /login');
        exit;
    }
        global $pdo;
        //1 on recuper les information de la BDD via le Model
        
        $trajets = UsersGet::getTrajets($pdo);


        //2 on affiche la vue a  users.php
       
        require_once __DIR__ . '/../views/users.php';

        
    }
    
}