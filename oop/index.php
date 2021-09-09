<?php

include 'animal.php';
include 'frog.php';
include 'ape.php';

// Release 0 - Sheep
echo "Sheep<br>";
$sheep = new Animal("Shaun");
echo "Name: $sheep->name<br>"; // "Shaun"
echo "Legs: $sheep->legs<br>"; // 4
echo "Cold Blooded: $sheep->cold_blooded<br><br>"; // "No"

// Release 1 - Frog
echo "Frog<br>";
$frog = new Frog("Buduk");
echo "Name: $frog->name<br>"; // "Buduk"
echo "Legs: $frog->legs<br>"; // "4"
echo "Cold Blooded: $frog->cold_blooded<br>"; // "No"
echo "Jump: ";  $frog->jump(); echo "<br><br>";// "Hop Hop"

// Release 1 - Ape
echo "Ape<br>";
$ape = new Ape("Kera Sakti");
echo "Name: $ape->name<br>"; // "Kera Sakti"
echo "Legs: $ape->legs<br>"; // "2"
echo "Cold Blooded: $ape->cold_blooded<br>"; // "No"
echo "Yell: ";  $ape->yell(); echo "<br><br>"; // "Auooo"

?>