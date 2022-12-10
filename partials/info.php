<?php

class Info
{
    public $durata;
    public $regia;
    public $cast;


    public function __construct($durata, $regia,  array $cast)
    {
        $this->durata = $durata;
        $this->regia = $regia;
        $this->cast = $cast;
    }
    public function getCast()
    {
        $result = "";
        foreach ($this->cast as $casts) {
            $result .= $casts . " " . "<br>";
        }
        return $result;
    }
    public function printDue()
    {
        return "Durata:$this->durata min Regia: $this->regia Cast:" . $this->getCast() . "";
    }
}
