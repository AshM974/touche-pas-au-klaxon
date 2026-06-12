<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/AdminGet.php';


class AdminController {
    public function index(PDO $pdo) {
        if (!isset($_SESSION['id_users'])) {
            header('Location: /login');
            exit;
        }

        global $pdo;
        // Afficher trajet en vue
        
        $trajets = AdminGet::getTrajets($pdo);
        

        // Afficher  Liste Agences
        $agences = AdminGet::listAgences($pdo);
        //Affiche Liste Utilisateur
        $users = AdminGet::listUsers($pdo);

        require_once __DIR__ . '/../views/dashboard_admin.php';


    }

    


}