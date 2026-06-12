<?php 

class AgenceGet {
    public static function addAgence(PDO $pdo): array {
        $sql = "INSERT INTO agences (nom) VALUES (:nom)";
        $add = $pdo->prepare($sql);

        $add->execute([':nom' => $_POST['nom']]);

        return $add->fetchAll(PDO::FETCH_ASSOC);


    }


    public static function editAgence(PDO $pdo, int $id_agence): array|false{
        $sql = "SELECT * FROM agences WHERE id_agence = :id_agence";
        $edit = $pdo-> prepare($sql);

        $edit->execute([':id:agence' => $id_agence]);

        return $agence = $edit->fetch(PDO::FETCH_ASSOC);
 

    }

    public static function updateAgence(PDO $pdo, array $data): void{
        $sql = "UPDATE agences SET nom = :nom WHERE id_agences = :id_agence";

        $update = $pdo->prepare($sql);

        $update->execute($data);


    }

        public static function deleteAgence(PDO $pdo, int $id_agence): void{
            $sql="DELETE FROM agences WHERE id_agences = :id_agence";

            $delete = $pdo->prepare($sql);

            $delete->execute([':id_agence' => $id_agence]);

        }


    
}