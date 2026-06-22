<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/HomeGet.php';
/**
 * Contrôleur de la page d'accueil.
 */
class HomeController {
    /**
     * Affiche la liste des trajets disponibles sur la page d'accueil.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @return void
     */
    public function index(PDO $pdo) {
        global $pdo;


        $trajets = HomeGet::getTrajets($pdo);


        require_once __DIR__ . '/../views/home.php';
        
    }

}