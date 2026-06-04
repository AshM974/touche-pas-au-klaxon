<?php
require_once __DIR__ . '/../../config/database.php';

class UsersController {

    public function index() {
        global $pdo;
        //1 on recuper les trajet
        $sql = "SELECT  
        trajet.*,
        depart.nom AS nom_agence_depart,
        arrivee.nom AS nom_agence_arrivee
        FROM trajet
        INNER JOIN agences AS depart
            ON trajet.id_agences_depart = depart.id_agences
        INNER JOIN agences AS arrivee
            ON trajet.id_agences_arrivee = arrivee.id_agences
        ORDER BY date_heure_depart ASC";

        $resultat = $pdo->query($sql);
        //2 on affiche la vue a  users.php
        $trajets = $resultat->fetchAll(PDO::FETCH_ASSOC);
        require_once __DIR__ . '/../views/users.php';
    }
    
}