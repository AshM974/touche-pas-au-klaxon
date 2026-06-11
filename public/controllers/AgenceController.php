<?php

require_once __DIR__ . '/../../config/database.php';

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

        $sql = "INSERT INTO agences (nom) VALUES (:nom)";
        $ajout = $pdo->prepare($sql);

        $ajout->execute([':nom' => $_POST['nom']
    ]);

        header('Location: /dashboard_admin?modal=agences');
        exit;
    }

    public function edit() {
        global $pdo;
        //1 Verifier l'acces a la page 
        $this->checkAdmin();
        //2 On recupere l'agence à modifier
        $id_agence = $_GET['id'];
        $sql = "SELECT * FROM agences WHERE id_agence = :id_agence";
        $edit = $pdo-> prepare($sql);

        $edit->execute([
            ':id:agence' => $id_agence
        ]);

        $agence = $edit->fetch(PDO::FETCH_ASSOC);

        //3 On affiche le formulaire prérempli
        require_once __DIR__ . '/../views/agence/edit_agence.php';

    }

    public function update() {
        global $pdo;

        $sql = "UPDATE agences
                SET nom = :nom
                WHERE id_agences = :id_agence";

        $update = $pdo->prepare($sql);

        $update->execute([
            ':nom' => $_POST['nom'],
            ':id_agence' => $_POST['id_agence']
        ]);

        header('Location: /dashboard_admin?modal=agences');
        exit;
    }

    public function delete() {
        global $pdo;
        $this->checkAdmin();
        $id_agence = $_GET['id'];

        $sql="DELETE FROM agences WHERE id_agences = :id_agence";

        $delete = $pdo->prepare($sql);

        $delete->execute([
            ':id_agence' => $id_agence
        ]);

        header('Location: /dashboard_admin?modal=agences');
        exit;

    }


}