<DOCTYPE html>
<html  lang="pt">
  <head>
  <meta charset="utf-8">
  <title>php</title>
  </head>
<body>
  <?php

    function digaAlgo(){
        echo "olá olá";
    }

    function calculator(){
        echo 456+345;
    }

    function init(){
      digaAlgo();
      echo "<br>";
      calculator();
    }

    init();

    echo "<br>";
    echo "----------------";
    echo "<br>";

    // parametros
    function somar($x, $y){
        return $x + $y;
    }

    function subtrair($x, $y){
        return $x - $y;
    }

    echo somar(1,2) ."<br>";
  ?>


</body>
</html>
