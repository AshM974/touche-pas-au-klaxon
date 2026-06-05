<?php

require_once __DIR__ . '/../../config/database.php';


class TrajetController {
    public function create() {
        if(!isset($_SESSION['id_users'])) {
            header('Location: /login');
            exit;
        }
        global $pdo;

        //1 on recupere les agences

        $sql = "SELECT * FROM agences ORDER BY nom ASC";
        $resultat = $pdo->query($sql);

        //2 les afficher dans le view
 
        $agences = $resultat->fetchAll(PDO::FETCH_ASSOC);

    

        require_once __DIR__ . '/../views/trajet/create_trajet.php';

    }

    public function ajout() {
        global $pdo;

        //1 on recupere les données du formulaire

        $sql = "INSERT INTO trajet (
            id_users,
            id_agences_depart,
            id_agences_arrivee,
            date_heure_depart,
            date_heure_arrivee,
            nb_places_totale,
            nb_places_restante
        ) VALUES (
            :id_users,
            :id_agences_depart,
            :id_agences_arrivee,
            :date_heure_depart,
            :date_heure_arrivee,
            :nb_places_totale,
            :nb_places_restante
            
        )";
        
        $ajout = $pdo->prepare($sql);

        $ajout->execute([
            ':id_users' => $_SESSION['id_users'],
            ':id_agences_depart' => $_POST['id_agences_depart'],
            ':id_agences_arrivee' => $_POST['id_agences_arrivee'],
            ':date_heure_depart' => $_POST['date_heure_depart'],
            ':date_heure_arrivee' => $_POST['date_heure_arrivee'],
            ':nb_places_totale' => $_POST['nb_places_totale'],
            ':nb_places_restante' => $_POST['nb_places_totale']
        ]);

        //2 on redirigie vers users
        header('Location:/users');
        exit;
    }

    public function edit() {
        global $pdo;

        //1 on recupere le trajet a modifié

        $id_trajet = $_GET['id'];
        $sql = "SELECT * FROM trajet WHERE id_trajet = :id_trajet";
        $edit = $pdo->prepare($sql);

        $edit->execute([
            ':id_trajet' => $id_trajet

        ]);

        $trajet = $edit->fetch(PDO::FETCH_ASSOC);

        //2 on recupere les agences

        $sqlAgences = "SELECT * FROM agences ORDER BY nom ASC";
        $resultatAgences = $pdo->query($sqlAgences);
        $agences = $resultatAgences->fetchAll(PDO::FETCH_ASSOC);

        //3 on affiche le formulaire pre remplu
        require_once __DIR__ . '/../views/trajet/edit_trajet.php';

    }


    public function update() {
        global $pdo;
        //1 
        $sql = "UPDATE trajet
                SET
                    id_agences_depart = :id_agences_depart,
                    id_agences_arrivee = :id_agences_arrivee,
                    date_heure_depart = :date_heure_depart,
                    date_heure_arrivee = :date_heure_arrivee,
                    nb_places_totale = :nb_places_totale,
                    nb_places_restante = :nb_places_restante
                WHERE id_trajet = :id_trajet";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':id_trajet' => $_POST['id_trajet'],
            ':id_agences_depart' => $_POST['id_agences_depart'],
            ':id_agences_arrivee' => $_POST['id_agences_arrivee'],
            ':date_heure_depart' => $_POST['date_heure_depart'],
            ':date_heure_arrivee' => $_POST['date_heure_arrivee'],
            ':nb_places_totale' => $_POST['nb_places_totale'],
            ':nb_places_restante' => $_POST['nb_places_restante']
        ]);
        //2
        header('Location: /users');
        exit;
}
}