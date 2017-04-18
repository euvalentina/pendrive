
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

  <body>
    <?php
      $antonio = 1.50;
      $bernardo = 1.20;

      $contador = 0;

      while ($bernardo < $antonio) {
        $antonio = $antonio + 0.02;
        $bernardo = $bernardo + 0.03;

        $contador = $contador + 1;
      }
      echo "Foram necessários " . $contador . " anos para Bernardo ficar maior que Antonio." ;






    ?>


  </body>


</html>
