<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/AgenceGet.php';
/**
 * Contrôleur responsable de la gestion des agences.
 */
class AgenceController {
    /**
     * Vérifie que l'utilisateur connecté est administrateur.
     *
     * @return void
     */
    public function checkAdmin(){
        if (
            !isset($_SESSION['id_users'])
            || $_SESSION['role'] !== 'admin'
        ) {
            header('Location: /login');
            exit;
        }
    }
    
    /**
     * Ajoute une nouvelle agence.
     *
     * @return void
     */
    public function add() {
        global $pdo;

        $this->checkAdmin();

        $add = AgenceGet::addAgence($pdo);

        header('Location: /dashboard_admin?modal=agences');
        exit;
    }

    /**
     * Affiche le formulaire de modification d'une agence.
     *
     * @return void
     */
    public function edit() {
        global $pdo;
        $this->checkAdmin();
        $id_agence = $_GET['id'];

        $agence = AgenceGet::editAgence($pdo, $id_agence);
        require_once __DIR__ . '/../views/agence/edit_agence.php';

    }

    /**
     * Met à jour une agence existante.
     *
     * @return void
     */
    public function update() {
        global $pdo;
        AgenceGet::updateAgence($pdo,[
            ':nom' => $_POST['nom'],
            ':id_agence' => $_POST['id_agence']
        ] );
        header('Location: /dashboard_admin?modal=agences');
        exit;
    }

    /**
     * Supprime une agence.
     *
     * @return void
     */
    public function delete() {
        global $pdo;
        $this->checkAdmin();
        $id_agence = $_GET['id'];

        AgenceGet::deleteAgence($pdo, $id_agence);
        
        header('Location: /dashboard_admin?modal=agences');
        exit;

    }


}