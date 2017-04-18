
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

  <body>
  <?php
    $lista = array(85, 48, 31, 75, 64, 13, 45);

    echo "a. Qual é o maior número? ";
    echo max($lista);

    echo "<br>";

    echo "b. Qual é o menor número? ";
    echo min($lista);

    echo "<br>";

    echo "c. Liste todos os números do array: ";
    print_r ($lista);

    echo "<br>";

    echo "d. Em ordem crescente: ";
    sort($lista);
    // echo sort($lista);




  ?>


  </body>


</html>
