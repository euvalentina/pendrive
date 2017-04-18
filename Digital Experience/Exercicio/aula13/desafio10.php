<?php
/*
Usando o método GET, crie um formulário que receba o nome do estudante,
2 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado!
Faça a validação dos campos de modo que usuário tenha que preencher todos os campos.
*/

if (isset($_GET['enviar'])) {
  $nac_1 = $_GET['nac_1'];
  $nac_2 = $_GET['nac_2'];

  $nome = $_GET['nome'];

  $media = ($nac_1 + $nac_2) / 2;


}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container">

      <div class="col-sm-6">

        <h1 class="text-center">DESAFIO 10 - NOTAS</h1>


  <form action="desafio10.php" method="get">

      <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control">
      </div>

      <div class="form-group">
      <label for="nac_1">Nac 1</label>
      <input type="text" name="nac_1" class="form-control">
      </div>

      <div class="form-group">
      <label for="nac_2">Nac 2</label>
      <input type="text" name="nac_2" class="form-control">
      </div>

      <input class="btn btn-primary" type="submit" name="enviar" value="CALCULAR MÉDIA">

 </form>
 <br>

<?php
  if (isset($media)) {
echo '<div class="alert alert-success" role="alert"><strong>' . $nome . ' sua média é: ' . $media . '</strong></div>';
  }
 ?>


    </div>
  </div>


</body>
</html>
