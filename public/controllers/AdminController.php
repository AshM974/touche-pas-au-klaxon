<?php

require_once __DIR__ . '/../../config/database.php';

class AdminController {
    public function index() {
        if (!isset($_SESSION['id_users'])) {
            header('Location: /login');
            exit;
        }

        global $pdo;
        // Afficher trajet en vue
        $sql = "SELECT  
        trajet.*,
        depart.nom AS nom_agence_depart,
        arrivee.nom AS nom_agence_arrivee,
        users.nom AS conducteur_nom,
        users.prenom AS conducteur_prenom,
        users.telephone AS conducteur_telephone,
        users.email AS conducteur_email
        FROM trajet
        INNER JOIN agences AS depart
            ON trajet.id_agences_depart = depart.id_agences
        INNER JOIN agences AS arrivee
            ON trajet.id_agences_arrivee = arrivee.id_agences
        INNER JOIN users
            ON trajet.id_users = users.id_users
        ORDER BY date_heure_depart ASC";
        $resultat = $pdo->query($sql);
        $trajets = $resultat->fetchAll(PDO::FETCH_ASSOC);

        // Afficher  Liste Agences
        $sqlAgences = "SELECT * FROM agences ORDER BY nom ASC";
        $resultatAgences = $pdo->query($sqlAgences);
        $agences = $resultatAgences->fetchAll(PDO::FETCH_ASSOC);
        //Affiche Liste Utilisateur
        $sqlUsers = "SELECT * FROM users ORDER BY nom ASC";
        $resultatUsers = $pdo->query($sqlUsers);
        $users = $resultatUsers->fetchAll(PDO::FETCH_ASSOC);

        require_once __DIR__ . '/../views/dashboard_admin.php';


    }
}