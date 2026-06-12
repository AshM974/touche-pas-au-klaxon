<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/TrajetPost.php';



class TrajetController {
    public function create() {
        if(!isset($_SESSION['id_users'])) {
            header('Location: /login');
            exit;
        }
        global $pdo;

        //1 on recupere les agences

        $agences = TrajetPost::createTrajet($pdo);

            //2 les afficher dans le view


        require_once __DIR__ . '/../views/trajet/create_trajet.php';

    }

    public function ajout() {
        global $pdo;
//Controle agence depart / arrivé
    if($_POST["id_agences_depart"] == $_POST["id_agences_arrivee"]){
        echo "L'agence de départ et d'arrivée doivent être différentes";
        exit;
    }
//controle date depart / arrivé 
if($_POST["date_heure_depart"] == $_POST["date_heure_arrivee"]){
        echo "L'heure de départ et d'arrivée doivent être différentes";
        exit;
    }
        //1 on recupere les données du formulaire

        TrajetPost::ajoutTrajet($pdo, [
            ':id_users' => $_SESSION['id_users'],
            ':id_agences_depart' => $_POST['id_agences_depart'],
            ':id_agences_arrivee' => $_POST['id_agences_arrivee'],
            ':date_heure_depart' => $_POST['date_heure_depart'],
            ':date_heure_arrivee' => $_POST['date_heure_arrivee'],
            ':nb_places_totale' => $_POST['nb_places_totale'],
            ':nb_places_restante' => $_POST['nb_places_totale']
        ]);

        header('Location: /users');
        exit;
    }

    public function edit() {
        global $pdo;

        //1 on recupere le trajet a modifié

        $id_trajet = $_GET['id'];


        $trajet = TrajetPost::editTrajet($pdo, $id_trajet);
        $agences = TrajetPost::createTrajet($pdo);


        //2 on affiche le formulaire pre remplu
        require_once __DIR__ . '/../views/trajet/edit_trajet.php';

    }


    public function update() {
        global $pdo;
        //1 
        
        TrajetPost::updateTrajet($pdo, [
            ':id_trajet' => $_POST['id_trajet'],
            ':id_agences_depart' => $_POST['id_agences_depart'],
            ':id_agences_arrivee' => $_POST['id_agences_arrivee'],
            ':date_heure_depart' => $_POST['date_heure_depart'],
            ':date_heure_arrivee' => $_POST['date_heure_arrivee'],
            ':nb_places_totale' => $_POST['nb_places_totale'],
            ':nb_places_restante' => $_POST['nb_places_restante']
 
        ]);
        
      header('Location: /users');
        exit;

    }

    public function delete() {
        
    global $pdo;

    $id_trajet = $_GET['id'];

    TrajetPost::deleteTrajet($pdo, $id_trajet);
     


    header('Location: /users');
    exit;
    }
}