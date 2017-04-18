
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

  <body>
  <?php

    function imc(){
      $peso = 79;
      $altura = 1.66;
      $imc = $peso/($altura*2);

      if ($imc <= 18.5) {
        echo "Abaixo do peso";
      }elseif ($imc > 18.5 && $imc <= 25) {
        echo "Peso normal";
      }elseif ($imc > 25 && $imc <= 30 ) {
        echo "Acima do peso";
      }elseif ($imc > 30) {
        echo "Obeso";
      }
    }

    echo "O resultado do IMC de Rosana é: ";
    imc();










  ?>


  </body>


</html>
