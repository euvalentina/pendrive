<DOCTYPE html>
<html  lang="pt">
  <head>
  <meta charset="utf-8">
  <title>php</title>
  </head>
<body>
  <?php

  $nota_ps = 6.2;
  $nota_am = 8.7;
  $nota_nac = 7;

  $faltas = 13;
  $total_faltas = 70;

  $peso_ps = 0.2;
  $peso_am = 0.3;
  $peso_nac = 0.5;
  $peso_falta = 0.2;

  $media = (($nota_ps*$peso_ps)+($nota_nac*$peso_nac)+($nota_am*$peso_am));
  echo $media;
  echo "<br> ";
  $porcent_falta = (70*0.2);

  if($faltas >= $porcent_falta && $media >=7){
    echo "Reprovado";
  }else{
    echo "Aprovado";
  }




  ?>


</body>
</html>
