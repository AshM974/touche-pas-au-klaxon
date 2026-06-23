<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../public/models/AgenceGet.php';

class AgenceTest extends TestCase
{
    private PDO $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=touche_pas_au_klaxon;charset=utf8',
            'root',
            ''
        );

        $_POST = [];
    }

    public function testAddAgence(): void
    {
        $_POST['nom'] = 'Agence Test PHPUnit';

        AgenceGet::addAgence($this->pdo);

        $stmt = $this->pdo->prepare(
            "SELECT * FROM agences WHERE nom = :nom"
        );
        $stmt->execute([':nom' => 'Agence Test PHPUnit']);

        $agence = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertNotFalse($agence);
        $this->assertSame('Agence Test PHPUnit', $agence['nom']);
    }

    public function testEditAgence(): void
    {
        $this->pdo->exec(
            "INSERT INTO agences (nom) VALUES ('Agence Avant Modif PHPUnit')"
        );

        $id = (int) $this->pdo->lastInsertId();

        $agence = AgenceGet::editAgence($this->pdo, $id);

        $this->assertIsArray($agence);
        $this->assertSame('Agence Avant Modif PHPUnit', $agence['nom']);
    }

    public function testUpdateAgence(): void
    {
        $this->pdo->exec(
            "INSERT INTO agences (nom) VALUES ('Agence A Modifier PHPUnit')"
        );

        $id = (int) $this->pdo->lastInsertId();

        $_POST['nom'] = 'Agence Modifiee PHPUnit';

        AgenceGet::updateAgence($this->pdo, [
        ':id_agence' => $id,
        ':nom' => 'Agence Modifiee PHPUnit'
]);

        $stmt = $this->pdo->prepare(
            "SELECT nom FROM agences WHERE id_agences = :id"
        );
        $stmt->execute([':id' => $id]);

        $nom = $stmt->fetchColumn();

        $this->assertSame('Agence Modifiee PHPUnit', $nom);
    }

    public function testDeleteAgence(): void
    {
        $this->pdo->exec(
            "INSERT INTO agences (nom) VALUES ('Agence A Supprimer PHPUnit')"
        );

        $id = (int) $this->pdo->lastInsertId();

        AgenceGet::deleteAgence($this->pdo, $id);

        $stmt = $this->pdo->prepare(
            "SELECT * FROM agences WHERE id_agences = :id"
        );
        $stmt->execute([':id' => $id]);

        $agence = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertFalse($agence);
    }

    protected function tearDown(): void
    {
        $this->pdo->exec(
            "DELETE FROM agences 
             WHERE nom LIKE '%PHPUnit%'"
        );
    }
}