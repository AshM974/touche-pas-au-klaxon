<?php

require_once __DIR__ . '/../../config/database.php';

class AgenceController {
    public function add() {
        global $pdo;

        if (
            !isset($_SESSION['id_users'])
            || $_SESSION['role'] !== 'admin'
        ) {
            header('Location: /login');
            exit;
        }

        $sql = "INSERT INTO agences (nom) VALUES (:nom)";
        $ajout = $pdo->prepare($sql);

        $ajout->execute([':nom' => $_POST['nom']
    ]);

        header('Location: /dashboard_admin?modal=agences');
        exit;
    }


}