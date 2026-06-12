<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/AgenceGet.php';

class AgenceController {
    public function checkAdmin(){
        if (
            !isset($_SESSION['id_users'])
            || $_SESSION['role'] !== 'admin'
        ) {
            header('Location: /login');
            exit;
        }
    }

    public function add() {
        global $pdo;

        $this->checkAdmin();

        $add = AgenceGet::addAgence($pdo);

        header('Location: /dashboard_admin?modal=agences');
        exit;
    }

    public function edit() {
        global $pdo;
        //1 Verifier l'acces a la page 
        $this->checkAdmin();
        //2 On recupere l'agence à modifier
        $id_agence = $_GET['id'];

        $agence = AgenceGet::editAgence($pdo, $id_agence);
        //3 On affiche le formulaire prérempli
        require_once __DIR__ . '/../views/agence/edit_agence.php';

    }

    public function update() {
        global $pdo;
        AgenceGet::updateAgence($pdo,[
            ':nom' => $_POST['nom'],
            ':id_agence' => $_POST['id_agence']
        ] );
        header('Location: /dashboard_admin?modal=agences');
        exit;
    }

    public function delete() {
        global $pdo;
        $this->checkAdmin();
        $id_agence = $_GET['id'];

        AgenceGet::deleteAgence($pdo, $id_agence);
        
        header('Location: /dashboard_admin?modal=agences');
        exit;

    }


}