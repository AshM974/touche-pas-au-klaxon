<?php 

class TrajetPost {
    public static function createTrajet(PDO $pdo): array {
        $sql = "SELECT * FROM agences ORDER BY nom ASC";

        $resultat = $pdo->query($sql);

        return $resultat->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function ajoutTrajet(PDO $pdo, array $data): void {
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

        $ajout->execute($data);


    }

    public static function editTrajet(PDO $pdo, int $id_trajet): array|false{
        $sql = "SELECT * FROM trajet WHERE id_trajet = :id_trajet";
        

        $edit = $pdo->prepare($sql);

        $edit->execute([':id_trajet' => $id_trajet]);

        return $trajet = $edit->fetch(PDO::FETCH_ASSOC);
    }


    public static function updateTrajet(PDO $pdo, array $data): void{
        $sql = "UPDATE trajet
                SET
                    id_agences_depart = :id_agences_depart,
                    id_agences_arrivee = :id_agences_arrivee,
                    date_heure_depart = :date_heure_depart,
                    date_heure_arrivee = :date_heure_arrivee,
                    nb_places_totale = :nb_places_totale,
                    nb_places_restante = :nb_places_restante
                WHERE id_trajet = :id_trajet";

        $update = $pdo->prepare($sql);

        $update->execute($data);
        
    }

    public static function deleteTrajet(PDO $pdo, int $id_trajet): void{
            $sql = "DELETE FROM trajet WHERE id_trajet = :id_trajet";
            $delete = $pdo->prepare($sql);
            $delete->execute([':id_trajet' => $id_trajet]);

    }

}
