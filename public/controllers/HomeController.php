<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/HomeGet.php';

class HomeController {

    public function index(PDO $pdo) {
        global $pdo;

        //1 on recupere les trajet  

        $trajets = HomeGet::getTrajets($pdo);

        //2 on affiche la vue a  home.php

        require_once __DIR__ . '/../views/home.php';
        
    }

}