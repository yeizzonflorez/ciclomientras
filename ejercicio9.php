<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio9</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Algoritmo que imprima la suma de todos los numeros pares y del 1 ala 100 y diga cuantos hay:</h3>
    <?php
    $i=1;
    $c=0;
    while ($i <= 100) {
    if (($i%2)==0 ){
        $c=$c+$i;
    echo "$c <br>";
    }
      $i++;
    }
    $cp=100/2;
    echo "La cantidad de numeros pares son: $cp";
     ?>
  </body>
</html>
