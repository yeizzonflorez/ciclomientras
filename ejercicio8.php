<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio8</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<h3>Algoritmo que imprima la suma de todos los numeros impares que van del 1 al 100:</h3>
    <?php
    $i=1;
    $c=0;
    while ($i <= 100) {
    if (($i%2)==1 ){
        $c=$c+$i;
    echo "$c <br>";
    }
      $i++;
    }
     ?>
  </body>
</html>
