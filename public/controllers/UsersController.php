<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/UsersGet.php';


/**
 * Contrôleur de la page utilisateur connecté.
 */

class UsersController {
    /**
     * Affiche la liste des trajets disponibles pour l'utilisateur connecté.
     *
     * @return void
     */
    public function index() {
        if (!isset($_SESSION['id_users'])) {

        header('Location: /touche_pas_au_klaxon/login');
        exit;
    }
        global $pdo;
        //1 on recuper les information de la BDD via le Model
        
        $trajets = UsersGet::getTrajets($pdo);


        //2 on affiche la vue a  users.php
       
        require_once __DIR__ . '/../views/users.php';

        
    }
    
}