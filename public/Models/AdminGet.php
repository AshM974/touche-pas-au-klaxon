<?php 
/**
 * Modèle responsable des requêtes administrateur.
 */
class AdminGet {
    /**
     * Récupère la liste complète des trajets avec les informations
     * des agences et des conducteurs.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @return array Liste des trajets.
     */
    public static function getTrajets(PDO $pdo) {
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
        ORDER BY trajet.date_heure_depart ASC";
        
        $resultat = $pdo->query($sql);

        return $resultat->fetchAll(PDO::FETCH_ASSOC);

    }
    /**
     * Récupère la liste des agences.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @return array Liste des agences.
     */
    public static function listAgences(PDO $pdo) {
        $sqlAgences = "SELECT * FROM agences ORDER BY nom ASC";

        $resultatAgences = $pdo->query($sqlAgences);

        return $resultatAgences->fetchAll(PDO::FETCH_ASSOC);

    }
    /**
     * Récupère la liste des utilisateurs.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @return array Liste des utilisateurs.
     */
    public static function listUsers(PDO $pdo) {
        $sqlUsers = "SELECT * FROM users ORDER BY nom ASC";

        $resultatUsers = $pdo->query($sqlUsers);

        return $resultatUsers->fetchAll(PDO::FETCH_ASSOC);

    }
}