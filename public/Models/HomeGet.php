<?php 

class HomeGet {
    public static function getTrajets(PDO $pdo) {
       $sql = "SELECT  
        trajet.*,
        depart.nom AS nom_agence_depart,
        arrivee.nom AS nom_agence_arrivee
        FROM trajet
        INNER JOIN agences AS depart
            ON trajet.id_agences_depart = depart.id_agences
        INNER JOIN agences AS arrivee
            ON trajet.id_agences_arrivee = arrivee.id_agences
        WHERE nb_places_restante > 0
        AND trajet.date_heure_depart >= NOW()  
        ORDER BY trajet.date_heure_depart ASC";
        
        $resultat = $pdo->query($sql);

        return $resultat->fetchAll(PDO::FETCH_ASSOC);

    }
}