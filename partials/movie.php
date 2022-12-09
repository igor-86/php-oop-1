<?php
require_once __DIR__ . "/info.php";

class Movies
{
    public $titolo;
    public $anno;
    public $info;


    public function __construct($titolo, $anno, Info $info)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->info = $info;
    }


    public function printInfo()
    {
        return "$this->titolo $this->anno";
    }
}
