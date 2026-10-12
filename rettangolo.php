<?php

//Base
$base=$_POST['base'];

//Altezza
$altezza=$_POST['altezza'];

echo "base inserita: " . $base . "<br>";
echo "altezza inserita: " . $altezza . "<br>";


//Area
$area=0;
$area=$base * $altezza;
echo "area: " . $area . "<br>";


//Perimetro
$perimetro=0;
$perimetro=($base*2)+($altezza*2);
echo "perimetro: " . $perimetro."<br>";

// Diagonale
$diagonale=0;
$diagonale = sqrt(pow($base, 2) + pow($altezza, 2));
echo "diagonale: " . $diagonale;

?>