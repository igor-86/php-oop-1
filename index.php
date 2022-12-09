<?php
require_once __DIR__ . "/partials/movie.php";
require_once __DIR__ . "/partials/production.php";


$movie = new Movies("Seven", 1995, "Thriller", "Indipendente", "3", "info");
var_dump($movie);
