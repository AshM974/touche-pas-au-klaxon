<?php

require_once __DIR__ . '/../../config/database.php';

class HomeController {

    public function index() {
        global $pdo;
        //1 on recupere les trajet
        $sql = "SELECT * FROM trajet WHERE nb_places_restante > 0 ORDER BY date_heure_depart ASC";
        $resultat = $pdo->query($sql);
        //2 on affiche la vue a  home.php
        $trajets = $resultat->fetchAll(PDO::FETCH_ASSOC);

        

        require_once __DIR__ . '/../views/home.php';
        
        echo "HomeController appelé";
        exit;
    }
}