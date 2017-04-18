<DOCTYPE html>
<html  lang="pt">
  <head>
  <meta charset="utf-8">
  <title>php</title>
  </head>
<body>
  <?php
    $numero = 34;

    switch ($numero) {
      case 34:
        echo "Esse é o 35544";
        break;
      case 37:
        echo "Esse é o 37";
        break;

      default:
        echo "Não encontrei nada";
        break;
    }

    echo "------------------------";

    //loop Infinito
    //  while (4 <5){
    //    echo "Boa noite";
    //  }

    $contador = 0;
      while ($contador < 10){
        echo $contador . "<br>";
        $contador++;
      }

      for($contador = 0; $contador < 10; $contador++){
        echo $contador . "<br>";
      }
  ?>


</body>
</html>
