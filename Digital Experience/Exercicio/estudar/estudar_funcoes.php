<DOCTYPE html>
<html  lang="pt">
  <head>
  <meta charset="utf-8">
  <title>php</title>
  </head>
<body>
  <?php

// POTENCIA
echo pow(2,5);
echo "<br>";

// RANDOM
echo rand(1,150);
echo "<br>";

//RAIZ
echo sqrt(100);
echo "<br>";

$string = "Valentina valentina !!";

// qtde de caracteres
echo strlen($string);
echo "<br>";

// todos para maiusculo
echo strtoupper($string);
echo "<br>";

//todos para minusculo
echo strtolower($string);

$lista = [323,434,43,43,54,23,5,234,3];

// maior do Array
echo max($lista);

echo "<br>";

// menor do Array
echo min($lista);
echo "<br>";

// crescente
sort($lista);

// array Inteiro
print_r($lista);

  ?>




</body>
</html>
