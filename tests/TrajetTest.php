<?php

use PHPUnit\Framework\TestCase;

class TrajetTest extends TestCase
{
    public function testAgenceDepartEtArriveeDifferentes(): void
    {
        $depart = 1;
        $arrivee = 2;

        $this->assertNotEquals($depart, $arrivee);
    }

    public function testDateArriveeApresDepart(): void
    {
        $depart = strtotime('2026-06-20 10:00:00');
        $arrivee = strtotime('2026-06-20 12:00:00');

        $this->assertGreaterThan($depart, $arrivee);
    }
}