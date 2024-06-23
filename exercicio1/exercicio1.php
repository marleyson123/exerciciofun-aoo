<?php
function triangulo($X, $Y, $Z)
{
  if (($X + $Y > $Z) && ($X + $Z > $Y) && ($Y + $Z > $X)) {
    if ($X == $Y && $Y == $Z) {
      echo "Triangulo Equilatero.";

    } else if ($X == $Y || $X == $Z || $Y == $Z) {
      echo "Triangulo Isosceles.";

    } else {
      echo "Triangulo Escaleno";
    }
  }
}

$X = 3;
$Y = 5;
$Z = 7;

triangulo($X, $Y, $Z);




