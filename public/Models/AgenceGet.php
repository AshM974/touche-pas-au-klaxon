<?php 
/**
 * Modèle responsable des requêtes liées aux agences.
 */
class AgenceGet {

    /**
     * Ajoute une nouvelle agence.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @return array
     */    
    public static function addAgence(PDO $pdo): array {
        $sql = "INSERT INTO agences (nom) VALUES (:nom)";
        $add = $pdo->prepare($sql);

        $add->execute([':nom' => $_POST['nom']]);

        return $add->fetchAll(PDO::FETCH_ASSOC);


    }

    /**
     * Récupère une agence à partir de son identifiant.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @param int $id_agence Identifiant de l'agence.
     * @return array|false
     */
    public static function editAgence(PDO $pdo, int $id_agence): array|false{
        $sql = "SELECT * FROM agences WHERE id_agence = :id_agence";
        $edit = $pdo-> prepare($sql);

        $edit->execute([':id:agence' => $id_agence]);

        return $agence = $edit->fetch(PDO::FETCH_ASSOC);
 

    }

    /**
     * Met à jour les informations d'une agence.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @param array $data Données à mettre à jour.
     * @return void
     */
    public static function updateAgence(PDO $pdo, array $data): void{
        $sql = "UPDATE agences SET nom = :nom WHERE id_agences = :id_agence";

        $update = $pdo->prepare($sql);

        $update->execute($data);


    }

    /**
     * Supprime une agence.
     *
     * @param PDO $pdo Connexion à la base de données.
     * @param int $id_agence Identifiant de l'agence à supprimer.
     * @return void
     */


    public static function deleteAgence(PDO $pdo, int $id_agence): void{
        $sql="DELETE FROM agences WHERE id_agences = :id_agence";

        $delete = $pdo->prepare($sql);

        $delete->execute([':id_agence' => $id_agence]);

        }


    
}