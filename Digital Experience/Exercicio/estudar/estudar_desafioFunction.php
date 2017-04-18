<DOCTYPE html>
<html  lang="pt">
  <head>
  <meta charset="utf-8">
  <title>php</title>
  </head>
<body>
  <?php

    function temperatura($c){
      return ($c * 1.8)+32;
    }

    echo "A temperatura em Fahrenheit é " . temperatura(35) . "°F";


  ?>


</body>
</html>
