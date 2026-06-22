

<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/TrajetPost.php';


/**
 * Contrôleur responsable de la gestion des trajets.
 */


class TrajetController {

    /**
     * Affiche le formulaire de création d'un trajet.
     *
     * @return void
     */

    public function create() {
        if(!isset($_SESSION['id_users'])) {
            header('Location: /login');
            exit;
        }
        global $pdo;


        $agences = TrajetPost::createTrajet($pdo);



        require_once __DIR__ . '/../views/trajet/create_trajet.php';

    }


    /**
     * Enregistre un nouveau trajet en base de données après validation.
     *
     * @return void
     */

    public function ajout() {
        global $pdo;
        if($_POST["id_agences_depart"] == $_POST["id_agences_arrivee"]){
            echo "L'agence de départ et d'arrivée doivent être différentes";
            exit;
        }
        if($_POST["date_heure_arrivee"] <= $_POST["date_heure_depart"]){
            echo "On ne peut pas arriver avant de partir.";
            exit;
        }



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


    /**
     * Affiche le formulaire de modification d'un trajet.
     *
     * @return void
     */


    public function edit() {
        global $pdo;


        $id_trajet = $_GET['id'];


        $trajet = TrajetPost::editTrajet($pdo, $id_trajet);
        $agences = TrajetPost::createTrajet($pdo);


        require_once __DIR__ . '/../views/trajet/edit_trajet.php';

    }

    /**
     * Met à jour un trajet existant.
     *
     * @return void
     */
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


    /**
     * Supprime un trajet.
     *
     * @return void
     */


    public function delete() {
        
    global $pdo;

    $id_trajet = $_GET['id'];

    TrajetPost::deleteTrajet($pdo, $id_trajet);
     


    header('Location: /users');
    exit;
    }
}