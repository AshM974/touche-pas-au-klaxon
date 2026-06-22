<?php

use PHPUnit\Framework\TestCase;

class AgenceTest extends TestCase {
    public function testNomAgenceNonVide(): void
    {
        $nomAgence = "Paris";

        $this->assertNotEmpty($nomAgence);
    }

    public function testNomAgenceSuperieurAZeroCaractere(): void
    {
    $nomAgence = "Marseille";

    $this->assertGreaterThan(0, strlen($nomAgence));
    }

}