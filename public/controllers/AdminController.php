<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/AdminGet.php';

/**
 * Contrôleur du tableau de bord administrateur.
 */
class AdminController {

    /**
     * Affiche le tableau de bord administrateur avec les trajets,
     * les agences et les utilisateurs.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @return void
     */
    public function index(PDO $pdo) {
        if (!isset($_SESSION['id_users'])) {
            header('Location: /touche_pas_au_klaxon/login');
            exit;
        }

        global $pdo;
        
        $trajets = AdminGet::getTrajets($pdo);
        

        $agences = AdminGet::listAgences($pdo);
        $users = AdminGet::listUsers($pdo);

        require_once __DIR__ . '/../views/dashboard_admin.php';


    }

    


}