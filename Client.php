<?php


class Client
{
    private string $marque = '';
    private string $modele = '';
    private int $nombreDePortes = 0;
    private int $reservoir = 0;
    private int $kilometrage = 0;
    private int $consommation = 0;

    public function setMarque (string $marque) {
        $this->marque = $marque;
    }

    public function getMarque () {
        return $this->marque;
    }

    public function setModele (string $modele) {
        $this->modele = $modele;
    }

    public function getModele () {
        return $this->modele;
    }

    public function setNombreDePortes (int $nombreDePortes) {
        $this->nombreDePortes = $nombreDePortes;
    }

    public function getNombreDePortes () {
        return $this->nombreDePortes;
    }

    public function setReservoir (int $reservoir) {
        $this->reservoir = $reservoir;
    }

    public function getReservoir () {
        return $this->reservoir;
    }

    public function setKilometrage (int $kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function getKilometrage () {
        return $this->kilometrage;
    }

    public function setConsommation (int $consommation) {
        $this->consommation = $consommation;
    }
}
