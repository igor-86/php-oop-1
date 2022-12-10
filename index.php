<?php
require_once __DIR__ . "/partials/movie.php";
require_once __DIR__ . "/partials/info.php";

$info = new Info(120, "David Fincher", ["Brad Pitt", "Morgan Freeman"]);

/* var_dump($info); */

$movie = new Movies("Seven", 1995, $info);
$movie2 = new Movies("Essere John Malkovic", 1999, new Info(110, "Spike Jonze", ["John Malkovic", "Cameron Diaz", "John Cusak"]));
$movie3 = new Movies("Bones and all", 2022, new Info("130", "Luca Guadagnino", ["Timothée Chalamet", "Taylor Russel", "Mark Rylance"]));

/* var_dump($movie);
echo "<br>";
var_dump($movie2);
echo "<br>";
var_dump($movie3); */

echo $movie->titolo;
echo "<br>";
echo $movie->anno;
echo "<br>";
echo $movie->info->printDue();

echo "<br>";
echo "<br>";

echo $movie2->titolo;
echo "<br>";
echo $movie2->anno;
echo "<br>";
echo $movie2->info->printDue();
