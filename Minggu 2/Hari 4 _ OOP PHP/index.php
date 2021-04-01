<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new Animal("shaun");

echo 'Name : ' . $sheep->name . '<br>'; // "shaun"
echo 'Legs : ' . $sheep->legs . '<br>'; // 4
echo 'Cold Blooded : ' . $sheep->cold_blooded . '<br>'; // "no"
echo '<br>';

$kodok = new Frog("buduk");

echo 'Name : ' . $kodok->name . '<br>'; // "buduk"
echo 'Legs : ' . $kodok->legs . '<br>'; // 4
echo 'Cold Blooded : ' . $kodok->cold_blooded . '<br>'; // "no"
echo 'Jump : '; $kodok->jump(); echo '<br>'; // "hop hop"
echo '<br>';

$sungokong = new Ape("kera sakti");

echo 'Name : ' . $sungokong->name . '<br>';
echo 'Legs : ' . $sungokong->legs . '<br>';
echo 'Cold Blooded : ' . $sungokong->cold_blooded . '<br>'; // "no"
echo 'Yell : '; $sungokong->yell(); echo '<br>'; // "Auooo"
echo '<br>';

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>
