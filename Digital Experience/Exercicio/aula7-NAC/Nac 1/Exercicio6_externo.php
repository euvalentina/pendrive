
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

  <body>
  <?php

    if(isset($_POST['enviar'])){

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $assunto = $_POST['assunto'];
      $verificacao = $_POST['verificacao'];
      $validacao = FALSE;


      $minimo = 3;
      $maximo = 32;

      $minimo_tel = 10;
      $maximo_tel = 11;

      if(strlen($nome) < $minimo || strlen($nome) > $maximo){
          echo "O nome de usuário deve ter entre 3 e 32 caracteres. <br>";
          $validacao = TRUE;
      }

      if(!strstr($email, '@')){
          echo "Digite o e-mail corretamente. <br>";
          $validacao = TRUE;
      }

      if(strlen($telefone) < $minimo_tel || strlen($telefone) > $maximo_tel){
          echo "O telefone deve ter entre 10 e 11 caracteres. <br>";
          $validacao = TRUE;
      }


      if($verificacao != 15){
          echo "O resultado da conta está incorreto! <br>";
          $validacao = TRUE;
      }

      if(!$validacao){
          echo "Todos os dados foram preenchidos corretamente";
      }
    }
  ?>

  </body>


</html>
