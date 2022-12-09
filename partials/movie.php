<?php
require_once __DIR__ . "/production.php";
class Movies
{
    public $titolo;
    public $anno;
    public $genere;
    public $produzione;
    public $informazioni;

    public function __construct($titolo, $anno, $genere, $produzione,  $informazioni)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
        $this->produzione = $produzione;
        $this->informazioni = $informazioni;
    }
}
